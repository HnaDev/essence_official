<?php
namespace App\Helper;

class Cart
{
    // dùng để đựng sp trong giỏ hàng
    private $items = [];
    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }

    // add
    public function add($product, $quantity,$attribute_size_id,$attribute_color_id)
    {
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'image' => $product->image,
            'quantity' => $quantity > 0 ? $quantity : 1,
            'brand_id' => $product->brand_id,
            'attribute_size_id' => $attribute_size_id,
            'attribute_color_id' => $attribute_color_id,
            'price' => $product->sale_price > 0 ? $product->sale_price : $product->price
        ];
        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] += $quantity;
        } else {
            // save to the created array
            $this->items[$product->id] = $item;
        }
        // save to the session
        session(['cart' => $this->items]);
    }
    public function update($id, $quantity)
    {
        if (isset($this->items[$id])) {
            $this->items[$id]['quantity'] = $quantity > 0 ? $quantity : 1;
        }
        // save to the session
        session(['cart' => $this->items]);

    }
    // delete
    public function delete($id)
    {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
        // save to the session
        session(['cart' => $this->items]);
    }
    // delete all
    public function remove()
    {
        // save to the session
        session(['cart'=> '']);
    }


    // phương thức đêr lấy ra $items vì nó đang là private
    public function getItem()
    {
        return $this->items;
    }
    // tính tổng tiền sản phẩm
    public function totalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }
        return $totalPrice;
    }
    // tính tổng tiền sản phẩm đã có giá vận chuyển
    public function totalPrice_ship()
    {
        // tính tổng số lượng đơn hàng
        $this->getTotalQuantity();

        $totalPrice_ship = 0;
        foreach ($this->items as $item) {
            $totalPrice_ship += ($item['quantity'] * $item['price']);
        }
        if ($this->getTotalQuantity() <= 1) {
            $totalPrice_ship += 30000;
        } else {
            $totalPrice_ship += 30000;
        }
        return $totalPrice_ship;
    }
    // subtotal cart mini
    public function subTotalPrice()
    {
        $subTotalPrice = 0;
        foreach ($this->items as $item) {
            $subTotalPrice += $item['quantity'] * $item['price'];
        }
        return $subTotalPrice;
    }

    // tính tổng đơn hàng
    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach ($this->items as $item) {
            $totalQuantity += $item['quantity'];
        }
        return $totalQuantity;
    }
}
