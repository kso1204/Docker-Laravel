

<?


interface BookInterface {
    public function open();
    public function turnPage();
}


interface eReaderInterface {
    public function turnOn();
    public function pressNextButton();
}

class Kindle implements eReaderInterface{

    public function turnOn()
    {
        var_dump('turn the kindle on');
    }
    public function pressNextButton()
    {
        var_dump('press the next button on the kindle');
    }

}

class KindleAdapter implements BookInterface {
    

    private $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        return $this->kindle->turnOn();

        //return $this->kindle->turnOn();
    }

    public function turnPage()
    {
       // return var_dump("DD");
          return $this->kindle->turnOn();
    }
}

class Book implements BookInterface{

    public function open()
    {
        var_dump('opening the paper bookasdsadasdsad');
    }

    public function turnPage()
    {
        var_dump('turning the page of the paper book.');
    }
}

class Person {

    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new KindleAdapter(new Kindle));

?>