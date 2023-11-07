<!Doctype html>
<html>
<head>
    <title>AnswerHub By ME</title>

<style>
    input
    {
        width: 400px;
        height: 35px;
        border: 1px solid green;
        border-radius: 5px
    }
    #addbtn
    {
        width: 100px;
        height: 35px;
        border: 1px solid green;
        border-radius: 5px;
        background-color: white;
        color: green;
        font-size: 15px;
    }
    #addbtn:hover
    {
        background-color: green;
        color: white;
    }
    #cancelbtn
    {
        width: 100px;
        height: 35px;
        border: 1px solid red;
        border-radius: 5px;
        background-color: white;
        color: red;
        font-size: 20px;
    }
    #cancelbtn:hover
    {
        background-color: red;
        color: white;
    }
    #desc
    {
        width: 500px;
        height: 100px; 
        border: 1px solid green;
         border-radius: 5px;
    }
</style>
</head>
<body>

<font size="7"><b><p align="center">Enter your question</b></p></font>

<form action="" method="POST" enctype="multipart/form-data">
    <table border="0" width="55%" align="center" cellspacing="10"> 
        <tr>
            <td>Question Title</td>
            <td><input type="text" name="questiontitle"></td>
        </tr>
        <tr>
            <td>Question Link</td>
            <td><input type="text" name="questionlink"></td>
        </tr>
        <tr>
            <td>Question keywords</td>
            <td><input type="text" name="questionkeywords"></td>
        </tr>
        <tr>
            <td>Question Description</td>
            <td><textarea name="questiondescription" id="desc"> </textarea></td>
        </tr>
            <tr>
            <td>Question Images</td>
            <td><input type="file" name="uploadfile"></td>
        </tr>
        </tr>
            <tr>
            <td colspan="2" align="center"> <input type="submit" name="addquestion" id="addbtn">
            &nbsp &nbsp
            <input type="reset" name="reset" id="cancelbtn">       </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
include("connection.php");
if($_POST['addquestion'])
{
    $question_title= $_POST['questiontitle'];
    $question_link= $_POST['questionlink'];
    $question_keywords= $_POST['questionkeywords'];
    $question_description= $_POST['questiondescription'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname =$_FILES["uploadfile"]["tmp_name"];

    $folder = "question_images/".$filename;
    move_uploaded_file($tempname, $folder);


    if($question_title!="" && $question_link!="" && $question_keywords!="" && $question_description!="" && $filename!="")
    {
        $query ="INSERT INTO add_website values ('$question_title','$question_link',' $question_keywords','$question_description','$folder')";
        $data = mysqli_query($conn,$query);
        
        if($data)
        {
            echo "<script>alert('Website Inserted')</script>";
        }
    }
    else
    {
        echo "<script>alert('Failed')</script>";
    }
}
?> 
