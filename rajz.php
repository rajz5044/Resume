<?php 
$name= $_POST['name'];
$post= $_POST['post'];
$salary= $_POST['salary'];
$contact= $_POST['contact'];
$conn = new mysqli('localhost','root','', 'rajz');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into class12project(name, post, salary, contact)values(?,?,?,?)"); 
    $stmt->bind_param("ssii",$name, $post, $salary, $contact);
    $stmt->execute();
    echo"<h1>Employers Detail Added Successfully!</h1><br>";
    echo"<h2>Assigned Emp_id is in the details section.</h2><br>";
    echo"<section id='kxa'><div><button onclick=window.location.href='add.html';>Go Back</button></div>";
    echo"<div><button>View Details</button></div></section>";
    $stmt->close();
    $conn->close();
}
?>
<style>
    button{
        width: 150px;
        height: 50px;
        font-size: 17px;
        margin-left:10px;
        
        
    }

    h1{
        padding-bottom: 0pc ;
        padding-top: 250px;
        padding-right:450px;
        padding-left:450px;
    }

    h2{
        padding-bottom: 0pc ;
        padding-top: 0px;
        padding-right:450px;
        padding-left:450px;
        margin-top:0px;

    }

    #kxa{
        margin-left: 440px;
        display: flex;
        justify-content: space-between:
        
        
    }
</style>