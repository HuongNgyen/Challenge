<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title class="text-uppercase">Product Inventory Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class= "d-flex ml-3 justify-content-around align-items-center border-bottom">
            <form action="{{asset('./')}}">
            <button class="btn btn-info">Home</button></form>
            <h1 class="text-center text-uppercase">Product Inventory Project</h1>
            </div>
            <h3 class="text-uppercase text-muted">create page</h3>
            <form action="{{route('products.store')}}" method="POST">
            {{csrf_field()}} 
    <div class="form-group">
    <label >Name </label>
    <input type="text" class="form-control" placeholder="Enter name" Name="name">
  </div>
     <div class="form-group">
    <label >Price </label>
    <input type="text" class="form-control" placeholder="Enter price" Name="price">
  </div>
  <div class="form-group">
    <label>Quantity on hand</label>
    <input type="text" class="form-control" placeholder="Enter quantity on hand" Name="quantity">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div  class="d-flex  align-items-center justify-content-around">
            <p class="text-uppercase text-muted">Product Inventory Project</p>
            <form action="/create"  method="get"  >
            {{csrf_field()}}
            <input type="hidden" value="get" name="_method">
            <button type='submit' class='btn btn-info text-uppercase'>create new an product</button></form>
           
            </div>
            </div>
        </div>
    </div>
</body>
</html>