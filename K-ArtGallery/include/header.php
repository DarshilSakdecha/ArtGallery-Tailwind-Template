<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   	<style>
   		    #header-wrap {
			    position: fixed;
			    height: auto;
			    width: 100%;
			    z-index: 100
			}
   	</style>
</head>
<body>
    <header class="text-gray-700 body-font bg-green-200" id="header-wrap">
	  	<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
		    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
		      <span class="ml-3 text-xl">K-ArtGallery</span>
		    </a>
		    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
			    <a href="#" class="mr-5 hover:text-gray-500">Gallary</a>
			    <a href="#about" class="mr-5 hover:text-gray-500">About</a>
			    <a href="#feedback" class="mr-5 hover:text-gray-500">Feedback</a>
			    <a href="#" class="mr-5 hover:text-gray-500">Contact</a>
		    </nav>
		    <button class="inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:text-gray-500 rounded text-base mt-4 md:mt-0">Registration</button>
	  	</div>
	</header>
</body>
</html>