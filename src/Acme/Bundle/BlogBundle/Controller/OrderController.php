<?php

namespace Acme\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\Bundle\BlogBundle\Form\ConfirmCheckoutType;
use Acme\Bundle\BlogBundle\Form\RemoveOrderType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller {

    public function indexAction() {

        $sessionValue = $this->get('session')->get('cart');
        $message = $this->get('session')->get('message');
        if ($sessionValue) {
            $totalPrice = 0;
            foreach ($sessionValue as $product) {
                $totalPrice+=$product['price'] * $product['quantity'];
            }

            $form_confirm = $this->createForm(new ConfirmCheckoutType());
            $path = $this->get('request')->getHttpHost();
            return $this->render('AcmeBlogBundle:Order:index.html.twig', array(
                        'carts' => $sessionValue,
                        'totalPrice' => $totalPrice,
                        'form' => $form_confirm->createView(),
                        'path' => $path,
                        'message' => $message
            ));
        } else {

            $url = $this->container->get('router')->generate('home');

            return $this->redirect($url);
        }
    }

    public function liveChangeQuantityAction(Request $request) {

        $quantity = $request->request->get('quantity');
        $id = $request->request->get('id');
        $sessionValue = $this->get('session')->get('cart');
        $product = $this->get('doctrine')
                        ->getRepository('AcmeBlogBundle:Product')->findProductById($id);
        $responseContent = 1;
        if ($quantity > $product['quantity']) {
            $responseContent = 0;
        } else {
            $responseContent = 1;
            $sessionValue[$id]['quantity'] = $quantity;
        }
        $this->get('session')->set('cart', $sessionValue);
        $response = new Response($responseContent);
        return $response;
    }

    public function checkOutAction(Request $request) {

        $result = $request->request->all();

        $sessionValue = $this->get('session')->get('cart');
        $checkValue = $request->get('account');
        $customer_id = null;
        $message = array();
        if ($result['email'] && $result['address']) {
            $customer = $this->get('doctrine')->getRepository('AcmeBlogBundle:Customer')->getCustomerByEmail($result['email']);

            if ($customer && !$checkValue) {
                $customer_id = $customer['customer_id'];
            } else if ($customer && $checkValue) {
                $message['error'] = 'Customer exist!';
            } else if (!$customer && $checkValue) {
                if ($result['firstname'] && $result['lastname']) {
                    $customer_id = $this->get('doctrine')->getRepository('AcmeBlogBundle:Customer')->addCustomer($result);
                }
                $message['error'] = 'Please fill First name and Last name!';
            } else if (!$customer && !$checkValue) {
                $message['error'] = 'Customer not exist!';
            }
            $order_id = null;
            if ($customer_id) {
                $order_id = $this->get('doctrine')->getRepository('AcmeBlogBundle:Order')->addOrder($result, $customer_id);
            }
            //If insert complete order into order table
            if (!empty($order_id)) {
                foreach ($sessionValue as $key => $item) {
                    $this->get('doctrine')->getRepository('AcmeBlogBundle:OrderDetail')->addOrderDetail($key, $item, $order_id);
                    $result = $this->get('doctrine')->getRepository('AcmeBlogBundle:Product')->findProductById($key);
                    $product = array(
                        'name' => $item['name'],
                        'description' => $item['description'],
                        'image_url' => $item['image_url'],
                        'quantity' => ($result['quantity'] - $item['quantity']),
                        'category_id' => $item['category_id'],
                        'price' => $item['price']
                    );
                    $this->get('doctrine')->getRepository('AcmeBlogBundle:Product')->updateProduct($product, $key);
                }

                $this->get('session')->set('cart', null);
            }
            $this->get('session')->set('message', $message);
            $url = $this->container->get('router')->generate('home');
            return $this->redirect($url);
        }
    }

    public function orderListAction() {
        $results = $this->get('doctrine')->getRepository('AcmeBlogBundle:Order')->findAllOrder();

        $form_order_delete = $this->createForm(new RemoveOrderType());



        return $this->render('AcmeBlogBundle:Order:order-list.html.twig', array(
                    'results' => $results,
                    'form' => $form_order_delete->createView(),
        ));
    }

    public function orderRemoveAction(Request $request) {
        $result = $request->request->all();
        $this->get('doctrine')->getRepository('AcmeBlogBundle:OrderDetail')->deleteOrderDetailByOrderId($result['order_id']);
        $this->get('doctrine')->getRepository('AcmeBlogBundle:Order')->deleteOrderById($result['order_id']);
        $url = $this->container->get('router')->generate('order_list');
        return $this->redirect($url);
    }

    public function orderDetailAction($order_id) {

        $results = $this->get('doctrine')->getRepository('AcmeBlogBundle:OrderDetail')
                ->findOrderDetailByOrderId($order_id);
        if ($results) {
            $args = $results;

            $customer = $this->get('doctrine')->getRepository('AcmeBlogBundle:Customer')
                    ->findCustomerById($results[0]['customer_id']);

            foreach ($results as $key => $item) {
                $product = $this->get('doctrine')->getRepository('AcmeBlogBundle:Product')
                        ->findProductById($item['product_id']);
                $args[$key]['product'] = $product;
            }

            return $this->render('AcmeBlogBundle:Order:order-detail.html.twig', array(
                        'results' => $args,
                        'customer' => $customer,
            ));
        }
    }

}
