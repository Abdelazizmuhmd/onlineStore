<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/style.css">
        <title>Receipt example</title>
    </head>
    <body>
        <center>
        <div class="ticket">
            <img src="../images/logo.png" alt="Logo">
            <p class="centered">RECEIPT 
               
            <table style="margin-left:-100px;">
                <thead>
                    <tr>
                        <th class="quantity">Quantity</th>
                        <th class="description">product</th>
                        <th class="price">price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
if(isset($_COOKIE['cook'])){
$products=json_decode($_COOKIE['cook'], true);
$sub_total=0;
foreach($products as $key => $product)
   
{  
    
    $sub_total =$sub_total+($product['quantity']*$product['price']);
           
                    echo'<tr>
                        <td class="quantity">'.$product['quantity'].'</td>
                        <td class="description">'.$product['name'].'/'.$product['color'].'/'.$product['size'].'</td>
                        <td class="price">'.$product['price'].' L.E</td>
                    </tr>';
}
                        
                    ?>
                     <tr>
                        <td class="quantity"></td>
                        <td class="description">TOTAL</td>
                        <td class="price"><?php echo $sub_total; }?> L.E</td>
                    </tr>
                    
                   
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
        </div>
        <button id="btnPrint" class="hidden-print">Print</button><br><br><br>
     <button onclick="movetoproducts()">Continue shopping</button>

        <script >
            
            function movetoproducts(){
                window.location.href="../public/products.php";
            }
            
            
            const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
</script>
            </center>
    </body>
</html>