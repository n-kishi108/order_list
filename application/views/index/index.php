<html>
    <head>
        <title>注文リスト</title>
        <link rel="stylesheet" href="<?=base_url('assets/css/index.css')?>" />
    </head>
    <body>
        <div class="wrapper">
            <section><!--ここに注文リストを表示-->
                <table id="order_list">
                    <tr>
                        <th>商品</th>
                        <th>金額</th>
                        <th>数量</th>
                    </tr>

                    <?php if(isset($list)):?>
                    <?php foreach($list as $el): ?>

                    <tr>
                        <td><?= $el['product'] ?></td>
                        <td><?= $el['price'] ?></td>
                        <td><?= $el['quantity'] ?></td>
                    </tr>

                    <?php endforeach;?>
                    <?php endif;?>

                </table>

            </section>

            <section><!--追加-->
                <form action="<?=base_url('post/insert/')?>" method="post" autocomplete="off">
                    <table>
                        <td>商品</td>
                        <td><input type="text" name="product" id="id_product" placeholder="商品名を入力" required /></td>
                        <td>金額</td>
                        <td><input type="text" name="price" id="id_price" placeholder="金額を入力" required /></td>
                        <td>数量</td>
                        <td><input type="text" name="quantity" id="id_quantity" placeholder="数量を入力" required /></td>
                    </table>

                    <!-- <label for="id_product">
                       <span>商品</span>
                       <input type="text" name="product" id="id_product" placeholder="商品名を入力" required />
                    </label>

                    <label for="id_price">
                       <span>金額</span>
                       <input type="text" name="price" id="id_price" placeholder="金額を入力" required />
                    </label>

                    <label for="id_product">
                       <span>数量</span>
                       <input type="text" name="quantity" id="id_quantity" placeholder="数量を入力" required />
                    </label> -->

                    <input type="submit" value="追加" />

                </form>
            </section>
            
            <section><!--削除-->
                <form action="<?=base_url('post/delete/')?>" method="post">

                    <table style="width: 33.3%;">
                        <td>商品</td>
                        <td><input type="text" name="product" id="id_product" placeholder="商品名を入力" required /></td>
                   </table>

                    <input type="submit" value="削除" />

                </form>
            </section>
        </div>
    </body>
</html>