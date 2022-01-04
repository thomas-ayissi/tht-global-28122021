


<body id="global">
<div class="container">




    <!-- inclusion de l'entête du site -->
    <?php include_once "header.php"; ?>
    <br>
    <br>
    <!-- inclusion de du titre du body du site -->
    <h1><?php include_once "titre_body.php"; ?></h1>



    <?php
    /* Script name: displayGallery
     * Description: Displays all the image files that are
     *              stored in a specified directory.
     */
    echo "<html><head><title>Image Gallery</title></head>
       <body>";
    $dir = "../test1/testdir/";                            	#8
    $dh = opendir($dir);	                                   #9
    while($filename = readdir($dh))	                       #10
    {
        $filepath = $dir.$filename; 	                        #12
        if(is_file($filepath) and ereg("\.jpg$",$filename))	 #13
        {
            $gallery[] = $filepath;
        }
    }
    sort($gallery);	                                       #16
    foreach($gallery as $image)	                           #17
    {
        echo "<hr />";
        echo "<img src='$image' /><br />";
    }
    ?>


    <?php
    /* Program: Catalog.php
     * Desc:    Displays a catalog of products. Displays two
     *          different pages: an index page that shows
     *          categories and a product page that is displayed
     *          when the customer selects a category.
     */
    include("dbstuff.inc");                                   	#8
    $n_per_page = 2;                                          	#9
    if(isset($_POST['Products']))                            	#10
    {
        if(!isset($_POST['interest']))                         	#12
        {
            header("location: Catalog_furniture.php");
            exit();
        }
        else                                                   	#17
        {
            if(isset($_POST['n_end']))                           	#19
            {
                if($_POST['Products'] == "Previous")               	#21
                {
                    $n_start = $_POST['n_end']-($n_per_page)-1;
                }
                else                                               	#25
                {
                    $n_start = $_POST['n_end'] + 1;
                }
            }
            else                                                 	#30
            {
                $n_start = 1;
            }
            $n_end = $n_start + $n_per_page - 1;                 	#34
            $cxn = mysqli_connect($host,$user,$passwd,$dbname);
            $query = "SELECT * FROM Furniture WHERE 
              type='$_POST[interest]' ORDER BY name";
            $result = mysqli_query($cxn,$query)
            or die ("query died: furniture");                	#39
            $n=1;	#40
            while($row = mysqli_fetch_assoc($result))            	#41
            {
                foreach($row as $field => $value)                  	#43
                {
                    $products[$n][$field]=$value;
                }
                $n++;
            }
            $n_products = sizeof($products);                     	#49
            if($n_end > $n_products)
            {
                $n_end = $n_products;
            }
            include("page_furniture_products.inc");	#54
        } // end else isset interest
    } // end if isset products
    else                                                     	#57
    {
        $cxn = mysqli_connect($host,$user,$passwd,$dbname); 	#59
        $query = "SELECT DISTINCT category,type FROM Furniture 
                   ORDER BY category,type";
        $result = mysqli_query($cxn,$query)
        or die ("Query died: category");                	#63
        while($row = mysqli_fetch_array($result))              	#64
        {
            $furn_categories[$row['category']][]=$row['type'];
        }
        include("page_furniture_index.inc");                   	#68
    }
    ?>






    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- inclusion du bas de page du site -->
    <?php include_once "pied_de_page.php"; ?>


</body>
</html>
