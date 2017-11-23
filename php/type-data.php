<?php include('../include/header.php'); ?>

<section id="layout-content">
    <h2>Элементарные типы данных</h2>
    <hr>
        <p>
            РНР является слабо типизированным языком. Это означает, что нет необходимо­
            сти объявлять тип данных, который должна хранить переменная. Так, в пределах
            одной и той же области видимости переменная $ numЬ e r может содержать как значе­
            ние 2, так и строку " two " ("два"). В строго типизированных языках программирова­
            ния, таких как С или Java, вы обязаны определить тип переменной , прежде чем
            присваивать ей значение, и, конечно, это значение должно быть указанного типа.
            Но это не означает, что в РНР нет понятия типа. Каждое значение, которое мож­
            но присвоить переменной, имеет свой тип. Вы можете определить тип значения
            переменной с помощью одной из функций проверки типов языка РНР. В табл. 3. 1
            перечислены элементарные типы данных, используемые в РНР, и соответствующие
            им функции проверки. Каждой функции передается переменная или значение, а
            она возвращает значение t ru e ("истина"), если аргумент относится к соответствую­
            щему типу.
        </p>

    <h2>Элементарные типы данных и функции проверки в  PHP </h2>


    <div class="phpcode">
        <h2>Функции проверки типов</h2>
        <hr>

        <h3>is_bool</h3>
        <code>
    function outputAddresses ( $resolve ) {
        if (!is_bool($resolve )) {
        die ("Методу outputAddress() требуется булев аргумент \n ");
        }
        </code>

        <h3>is_array</h3>
        <code>
    public function __construct(array $data = []) {
    if (!is_array($data)) {
        trigger_error('Unable to construct  ' . get_class($this));
    }
        </code>

        <blockquote class="note">
            dsdsdsds
            dsdsds
            sdsdsd

            sdsds
        </blockquote>
    
    </div>
</section>

<?php include('../include/footer.php'); ?>
