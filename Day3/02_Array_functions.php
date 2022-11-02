<?php
    $cars = ['Lamborghini', 'Mazda', 'Range Rover', 'Land Rover', 'Takoma Beast', 'Toyota'];

    //function to get length of array $cars
    // echo count($cars);

    //function to search the array $car
    // var_dump(in_array('Range', $cars));

    //Add to array $cars
    /**Method 1 */
    $cars[] = 'V8';
    
    /**Method 2 adding to the last position of the array $cars */
    array_push($cars, 'Saloon', 'Vitz', 'Defender', 'Lamboghini Urus');

    /**Method 3 adding to the beginning position of the array $cars */
    array_unshift($cars, 'Saloon1', 'Vitz1', 'Defender1', 'Lamboghini Urus1');

    

    //Remove from array $cars
    /**Method 1 remove from the end of the array $cars */
    array_pop($cars);

    /**Method 2 remove from the beginning of the array $cars */
    array_shift($cars);

    /**Method 3 remove a specific index from the array $cars */
    // unset($cars[2]);

    //split array into 2 chunks
    // $chunked_array = array_chunk($cars, 2);

    // print_r($chunked_array);

    // print_r($cars);

    /**Concatenate an array */
    $arr1 = [1,2,3,4];
    $arr2 = [5,6,7,8];

    $arr3 = array_merge($arr1,$arr2);
    $arr4 = [...$arr1, ...$arr2];

    // print_r($arr4);

    //combine arrays together
    $a = ['Yellow', 'Blue', 'Green'];
    $b = ['Banana', 'Berries', 'Avocado'];

    /**Will take $a as keys and $b as values */
    $c = array_combine($a, $b);

    // print_r($c);

    $keys = array_keys($c);
    // print_r($keys);

    $values = array_values($c);
    // print_r($values);

    /**Flipping the array */
    $flipped = array_flip($c);
    // print_r($flipped);

    /**An array with range of numbers */
    $numbers = range(1,20);

    // print_r($numbers);

    $newNumbers = array_map(function ($number){
        return "Number ${number}";
    }, $numbers);

    // print_r($newNumbers);

    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

    // print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);
