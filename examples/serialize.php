<!-- Name: serialize.php -->
<!-- Comment: Serialize demo -->
<!-- Code comes from: https://www.php.net/manual/en/jsonserializable.jsonserialize.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serialize</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">

    <?php
    
    class ArrayValue implements JsonSerializable
    {
        public function __construct(array $array)
        {
            $this->array = $array;
        }

        public function jsonSerialize()
        {
            return $this->array;
        }
    }

    $array = ['foo' => 'bar', 'quux' => 'baz'];
    echo json_encode(new ArrayValue($array), JSON_PRETTY_PRINT);

    date_default_timezone_set('America/Los_Angeles');

    class Fruit implements JsonSerializable
    {
        public
            $type = 'Apple',
            $lastEaten = null;

        public function __construct()
        {
            $this->lastEaten = new DateTime();
        }

        public function jsonSerialize()
        {
            return [
                'type' => $this->type,
                'lastEaten' => $this->lastEaten->format(DateTime::ISO8601)
            ];
        }
    }
     echo json_encode(new Fruit()); //which outputs: {"type":"Apple","lastEaten":"2013-01-31T11:17:07-0500"}

    echo ("<br>");
    echo ("<br>");

    class NestedSerializable implements \JsonSerializable
    {

        private $serializable;

        public function __construct($serializable)
        {
            $this->serializable = $serializable;
        }

        public function jsonSerialize()
        {
            return [
                'serialized' => $this->serializable
            ];
        }
    }

    class SerializableCollection implements \JsonSerializable
    {

        private $elements;

        public function __construct(array $elements)
        {
            $this->elements = $elements;
        }

        public function jsonSerialize()
        {
            return $this->elements;
        }
    }

    // Outputs: [{"serialized":null},{"serialized":null},{"serialized":{"serialized":null}}]
    echo json_encode(
        new SerializableCollection([
            new NestedSerializable(null),
            new NestedSerializable(null),
            new NestedSerializable(new NestedSerializable(null))
        ])
    );

    ?>

</body>

</html>