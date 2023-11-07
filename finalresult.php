<!Doctype html>
<html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
     body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            position: left;
        }
        
        .rating {
            display: inline-block;
            font-size: 15px;
        }
        
        .rating input {
            display: none;
        }
        
            .rating label {
                float: right;
                color: #ddd;
                cursor: pointer;
                position: relative;
        }
        
        .rating label:before {
            content: '\2605'; /* Unicode character for a star */
            font-size: 30px;
        }
        
        .rating input:checked ~ label {
            color: #ffcc00; /* Color for selected stars */
        }
        
        .rating label:hover:before,
        .rating label:hover ~ label:before {
            content: '\2605'; /* Unicode character for a filled star */
            color: #ffcc00;
        }
        
        .rating label:hover .tooltip {
            display: block;
        }
        
        .tooltip {
            display: none;
            position: absolute;
            background-color: #333;
            color: #fff;
            padding: 5px;
            border-radius: 4px;
            top: -30px;
            left: 100%;
            transform: translateX(-50%);
        }
        </style>
<body>
<div class="rating">
        <input type="radio" name="rating" id="star5"><label for="star5"><span class="tooltip">Excellent</span></label>
        <input type="radio" name="rating" id="star4"><label for="star4"><span class="tooltip">Very Good</span></label>
        <input type="radio" name="rating" id="star3"><label for="star3"><span class="tooltip">Good</span></label>
        <input type="radio" name="rating" id="star2"><label for="star2"><span class="tooltip">Bad</span></label>
        <input type="radio" name="rating" id="star1"><label for="star1"><span class="tooltip">Very Bad</span></label>
    </div>
        
<table border="0" width="100%" style="margin-left: 100px;">

    <?php
        $query1 ="select * from add_website where question_keywords like '%$search%'";
        $data1 = mysqli_query($conn,$query1);

        while($row1 = mysqli_fetch_array($data1))
        {
             echo
             " 
             <tr>
             <td>
             <font size='' color='#0000cc'><b><a href='$row1[1]'>$row1[0]</b></a></font><br>";
          
             echo "<font color='#006400 '>$row1[1]</a></font><br>
             </tr>
             </td>
             ";
            
        }
        
    ?>

</table>
</body>
</html>
