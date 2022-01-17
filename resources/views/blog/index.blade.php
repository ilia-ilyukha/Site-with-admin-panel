<style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
body{
	display: flex;
	justify-content: center;
	background-color: #fafafa;
}
h1{
	text-align: center;
	margin: 15px 0;
}
.content{
	width: 500px;
	max-width: 600px;
	height: 200px;
	background: chartreuse;
	margin: 20px 0;
	background-color: #fff;
	 box-shadow: 0px 1px 2px rgba(50, 50, 50, .1), 
		0px 2px 4px rgba(60, 60, 60, 0.1);
	border-radius: 5px;
	padding: 30px;
}
.content h2{
	font-weight: 800;
	margin: 10px 0;
}
.content p{
	margin: 10px 0;
	color: rgb(82, 80, 80);
	font-size: 1.1rem;
}
.content h4{
	font-weight: 90;
	margin: 15px 0;
	font-size: 15px;
}

</style>
<div id="container">
        <h1>Blog Posts</h1>
        @foreach ($articles as $article)
        <div class="content">
            <h2>{{ $article->name }}</h2>
            <p>{{ $article->annotation }}</p>
            <h4>By {{ $article->nickname }}.</h4>
        </div>
        @endforeach

    </div>