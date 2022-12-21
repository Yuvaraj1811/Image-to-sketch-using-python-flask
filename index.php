<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    body {
        /* background-color:#252525; */
        font-family: sans-serif;
        margin-top: 40px;
    }
    .regform {
        /* width: 800px; */
        background-color: rgb(0, 0, 0, 0.8);
        margin: auto;
        color: #FFFFFF;
        padding: 10px 0px 10px 0px;
        text-align: center;
        border-radius: 15px 15px 0px 0px;
    }
    .main-form {
        /* width: 800px; */
        margin: auto;
        background-color: rgb(0, 0, 0, 0.7);
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 20px;
        color: #FFFFFF;
    }
    img {
        max-height: 400px;
        max-width: 500px;
        height: auto;
        width: auto;
    }
    .btn-outline-success {
    color: #ffffff;
    border-color: #ffffff;
}
h2 {
    color: white;
}
</style>
<body>
<div class='regform mt-3'>
        <h1>Sketch</h1>
    </div>
    <form action='/sketch' class='main-form' method="POST" enctype="multipart/form-data">
        <div class='text-center'>
            <input type="file" id="file" name='file' style="margin-top:10px;margin-bottom:10px;">
            <button type='submit' class='btn btn-outline-success'> Make Sketch
            </button>
        </div>
    </form>
    {% if sketch_img_name %}
    <div class="row" style="margin-top:10px;margin-bottom:10px;">
        <div class="col text-center">
            <h2>Original Image</h2><img src='../static/uploads/{{ org_img_name }}'
                style="display: block;margin-left: auto;margin-right: auto;">
        </div>
        <div class="col text-center">
            <h2>Sketch Image</h2><img src='../static/uploads/{{ sketch_img_name }}'
                style="display: block;margin-left: auto;margin-right: auto;">
        </div>
    </div>
    {% endif %}
</body>
</body>
</html>