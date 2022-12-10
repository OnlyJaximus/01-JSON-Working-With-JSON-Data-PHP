# 01-JSON-Working-With-JSON-Data-PHP

* JavaScript Object Notation (JSON) is a standard text-based format for representing structured data based on JavaScript object syntax.
* Decode(String, Type) Converts data in JavaScript Object Notation (JSON) format into a data object of a specified type

      *** index-drinks.php ***
-We are going to decode it and convert it into a format the PHP can understand and work with, because on its own we can't loop through this JSON data and pull somne of  these values and display them on-screen.
-So, we need to change it into something the PHP can work with such as array.


      *** index-dogs-obj.php ***
-JSON is turned into a PHP array and that arrays holding objects stdClass, and here we use PHP objects syntax or arrow syntax

      *** index-dogs-assoc-array.php ***
- Decoding JSON to An Associative Array     
- Insteadd of seeing a standard class object, now it's a array MULTY-DIMENSIONAL ASSOCIATIVE ARRAY 
         
     *** index.php  ***
- consume some JSON data from a public API  https://swapi.dev/      
