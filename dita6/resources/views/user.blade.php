<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border:3px solid black;
            border-collapse: collapse;
        }
        td{
            border:1px solid black;
            
        }
    </style>
</head>
<body>
    <h1>Product Page</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Price</td>
            <td>Description</td>
            <td>Category</td>
            <td>Image</td>
        </tr>
        @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['title']}}</td>
            <td>{{$item['price']}}</td>
            <td>{{$item['description']}}</td>
            <td>{{$item['category']}}</td>
            <td><img src="{{$item['image']}}" alt="" style="width:70px;height:70px"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>