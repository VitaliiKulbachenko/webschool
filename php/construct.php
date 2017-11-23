<?php include('../include/header.php'); ?>

<section id="layout-content">
  
    	<h2>Магический метод __construct</h2>
        <hr>
        <p>
                Метод конструктора вызывается при создании объекта. Его можно использо­
            вать, чтобы все настроить, обеспечить определенные значения необходимых
            свойств и выполнить всю предварительную работу. До РНР 5 имя метода конструк­
            тора совпадало с именем класса, к которому оно относилось. Так, класс ShopProduct
            мог использовать метод ShopProduct() в качестве своего конструктора. В РНР 5 вы
            должны назвать метод конструктора __соnstruсt(). Обратите внимание на то, что
            имя метода начинается с двух символов подчеркивания. Это правило наименова­
            ния действует для многих других специальных методов в РНР-классах. Давайте
            определим конструктор для класса ShopProduct. 
            Meтoд __construct() вызывается. когда создается объект с по­мощью оператора new.
            Значения всех перечисленных аргументов передаются конструктору. Так, в на­
            шем примере мы передаем конструктору название произведения, имя и фамилию
            автора. а также цену. В методе конструктора используется псевдопеременная $this
            дл я присвоения значений соответствующим свойствам объекта.

        </p>

        <div class="phpcode">
            <code>
               
    class shopProduct {

    public $title               = 'Стандартный товар';
    public $producerMainName    = 'Фамилия автора';
    public $producerFirstName   = 'Имя автора';
    public $price               = 0;


        /**
         * shopProduct constructor.
         * @param $title
         * @param $mainName
         * @param $firstName
         * @param $price
         */
    public function __construct($title, $mainName, $firstName, $price )
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;

    }

        /**
         * shopProduct constructor.
         * @param array $data
         */

    public function __construct(array $data = [])
    {
        if (!is_array($data)) {
            trigger_error('Unable to construct  ' . get_class($this));
        }
        if (count($data) > 0 ) {
            foreach ( $data as $name => $value) {
                $this->$name = $value;
            }

        }


    }


    //End shopProduct class
    }


    	</code>
    </div>
</section>

<?php include('../include/footer.php'); ?>
