<?php

class Home extends Controller
{
    function index(): void
    {
        $product = $this->model_query("ProductModel");
        $this->view_render("layouts/application", [
                "page" => "application/home/index",
                "header" => "shared/header",
                "footer" => "shared/footer",
                "products" => $product->fetch_all_products()
            ]
        );
    }

    function catalog(): void
    {
        $product = $this->model_query("ProductModel");
        $this->view_render("layouts/application", [
            "page" => "application/home/catalog",
            "header" => "shared/header",
            "footer" => "shared/footer",
            "products" => $product->fetch_all_products()
        ]);
    }

    function category($id): void
    {
        $this->view_render("layouts/application", ["page" => "application/home/category", "id" => $id]);
    }

    function search($name): void
    {
        $product = $this->model_query("ProductModel");
        $this->view_render("layouts/application", [
            "page" => "application/home/search",
            "header" => "shared/header",
            "footer" => "shared/footer",
            "products" => $product->get_product_by_name($name),
            "name" => $name
        ]);
    }

    function product($id): void
    {
        $product = $this->model_query("ProductModel");
        $comment = $this->model_query("CommentModel");
        $this->view_render("layouts/application", [
            "page" => "application/home/product",
            "header" => "shared/header",
            "footer" => "shared/footer",
            "product" => $product->get_product($id),
            "comment_model" => $comment,
            "pid" => $id
        ]);
    }

    function contact(): void
    {
        $this->view_render("layouts/application",
            ["page" => "application/home/contact", "header" => "shared/header", "footer" => "shared/footer"]);
    }

    function cart(): void
    {
        $this->view_render("layouts/application",
            ["page" => "application/home/cart", "header" => "shared/header", "footer" => "shared/footer"]);
    }

    function account(): void
    {
        $user = $this->model_query("userModel");
        $this->view_render("layouts/application", [
            "page" => "application/home/account",
            "header" => "shared/header",
            "footer" => "shared/footer",
            "user_model" => $user
        ]);
    }

    function payment($price): void
    {
        $order = $this->model_query("OrderModel");
        $this->view_render("layouts/application", [
            "page" => "application/home/payment",
            "header" => "shared/header",
            "footer" => "shared/footer",
            "price" => $price,
            "order_model" => $order
        ]);
    }

    function success($oid, $uid, $datetime, $price, $name, $email, $phone, $address): void
    {
        $order = $this->model_query("OrderModel");
        $this->view_render("layouts/application", [
            "page" => "application/home/success",
            "header" => "shared/header",
            "footer" => "shared/footer",
            "oid" => $oid,
            "uid" => $uid,
            "date" => $datetime,
            "price" => $price,
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "address" => $address,
            "order_model" => $order
        ]);
    }
}
