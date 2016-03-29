<?php
namespace Acme\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ProductController extends Controller {

    public function indexAction($_route) {
        
        $session = new Session();
        $session->start();
        //$session->clear();
        $sessionValue = $this->get('session')->get('cart');

        $products = $this->get('doctrine')->getRepository('AcmeBlogBundle:Product')
                ->findAllProduct();
        return $this->render('AcmeBlogBundle:Product:index.html.twig', array(
                    'products' => $products,
                    'carts' => $sessionValue
        ));
    }

    public function addAction(Request $request) {
        
        $result = $request->request->all();
        $sessionValue = $this->get('session')->get('cart');
        
        if (!empty($sessionValue)) {
            
            if (array_key_exists($result['product_id'], $sessionValue)) {
                if ($sessionValue[$result['product_id']]['quantity'] < $result['quantity']) {
                    $sessionValue[$result['product_id']]['quantity']+=1;
                }
            } else {
                if (1 <= $result['quantity']) {
                    $sessionValue[$result['product_id']] = array(
                        'name' => $result['name'],
                        'description' => $result['description'],
                        'quantity' => 1,
                        'price' => $result['price'],
                        'image_url' => '',
                        'category_id' => null
                    );
                }
            }
        } else {
            if (1 <= $result['quantity']) {
                $sessionValue[$result['product_id']] = array(
                    'name' => $result['name'],
                    'description' => $result['description'],
                    'quantity' => 1,
                    'price' => $result['price'],
                    'image_url' => '',
                    'category_id' => null
                );
            }
        }
        $this->get('session')->set('cart', $sessionValue);
        return $this->redirect('home');
    }

    public function removeAction(Request $request) {
        $result = $this->getRequest()->request->all();
        $sessionValue = $this->get('session')->get('cart');

        if (!empty($sessionValue)) {
            if (array_key_exists($result['product_id'], $sessionValue)) {
                if ($sessionValue[$result['product_id']]['quantity'] >= 1) {
                    unset($sessionValue[$result['product_id']]);
                }
            }
        }

        $this->get('session')->set('cart', $sessionValue);
        return $this->redirect('home');
    }

}
