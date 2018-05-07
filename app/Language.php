<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $global = [
        'year' => 'рік',
        'gallery' => 'ГАЛЕРЕЯ',
        'parking' => 'ПАРКОВКА'
    ];

    public $header = [
        'parking' => 'ПАРКИНГ',
        'services' => 'СЕРВІСИ',
        'selling' => 'ПРОДАЖ',
        'contacts' => 'КОНТАКТИ',
        'name' => 'Транспортні послуги',
        'name_firm' => 'ПАСКАЛЬ'
    ];

    public $about = [
        'header' => 'SOBRE',
        'header_bold' => 'EL PARKING',
        'text' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.'
    ];

    public $services = [
        'header' => 'SERVICIO DE PARKING CARAVANING PASCUAL',
        'outside' => 'EXTERIOR',
        'inside' => 'INTERIOR'
    ];

    public $why_we = [
        'why_we' => 'Чому саме ми  ',
        'include' => 'В ціну включено',
        'repairs' =>[
            'header' => 'Ремонт',
            'text' => 'Ми робимо ремонт людям які орендують транспорт або купляють транспортні послуги в нас.'
        ],
        'exterior_wash' => [
            'header' => 'В нас є своя мийка',
            'text' => 'Працює 24/7 включена в оренду.'
        ],
        'insurance' => [
            'header' => 'Страхування включено',
            'text' => 'Ми пропонуємо страхування коли ваш транспорт знаходиться на нашій парковці'
        ],
        'lubrication' => [
            'header' => 'Топливо включено',
            'text' => 'В оренду або продаж входить повний бак пального.'
        ],
        'video' => [
            'header' => 'Відеонагляд',
            'text' => '24/7 нагляд на нашій парковці за вашим транспортом.'
        ],
        'transporation' => [
            'header' => 'Транспорт',
            'text' => 'Надаємо широкий діапазон транспортних послуг.'
        ]
    ];

    public $selling = [
        'header' => 'ПРОДАЖ ТРАНСПОРТУ',
        'details' => 'Деталі',
        'more' => 'Показати більше'
    ];

    public $modal_window = [
        'brand' => 'Марка',
        'model' => 'Модель',
        'size' => 'Розмір',
        'price' => 'Ціна',
        'year' => 'Рік',
        'description' => 'Опис'
    ];

    public $contacts = [
        'contact' => 'Контакти',
        'location' => 'Місце',
        'spanish' => 'на іспанській',
        'english' => 'на англійській',
        'every' => 'кожен день',
        'name' => 'Імя',
        'phone' => 'Номер телефону',
        'email' => 'пошта',
        'coment' => 'коментарій',
        'submit' => 'ВІДПРАВИТИ'
    ];

    public $footer = [
        'copyright' => '2018 Транспортні послуши паскаль',
        'by' => 'skochko.net'
    ];

    public $errors = [
        'name' => 'Неправильно введене імя',
        'phone' => 'Неправильно введено телефон',
        'email' => 'Неправильна електронна пошта',
        'no_caravan' => 'Немає транспорту на даний момент'
    ];





    public function __construct($lg)
    {
        if ($lg) {
            $this->global['year'] = 'year';
            $this->global['gallery'] = 'GALLERY';

            $this->header['parking'] = 'PARKING';
            $this->header['services'] = 'SERVICE';
            $this->header['selling'] = 'SALE';
            $this->header['contacts'] = 'CONTACTS';
            $this->header['name'] = 'PARKING CARAVANING';

            $this->about['header'] = 'ABOUT';
            $this->about['header_bold'] = 'PARKING';
            $this->about['text'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

            $this->services['header'] = 'SERVICE OF PARKING CARAVANING PASCUAL';
            $this->services['outside'] = 'OUTSIDE';
            $this->services['inside'] = 'INSIDE';

            $this->why_we['why_we'] = 'WHY WE';
            $this->why_we['include'] = 'THE PRICE INCLUDES';
            $this->why_we['repairs']['header'] = 'REPAIRS';
            $this->why_we['repairs']['text'] = 'We make repairs for customers of our caravanning parking.';
            $this->why_we['exterior_wash']['header'] = 'EXTERIOR WASH';
            $this->why_we['exterior_wash']['text'] = 'We offer a complete washing service of the entire caravan.';
            $this->why_we['insurance']['header'] = 'INSURANCE INCLUDED';
            $this->why_we['insurance']['text'] = 'We offer insurance included in all the prices of stay for when the caravan is in our parking.';
            $this->why_we['lubrication']['header'] = 'LUBRICATION';
            $this->why_we['lubrication']['text'] = 'We grease the stabilizing feet and all the lubrication points of the caravan.';
            $this->why_we['video']['header'] = 'VIDEO CAMERAS';
            $this->why_we['video']['text'] = '24 hours of video surveillance.';
            $this->why_we['transporation']['header'] = 'TRANSPORTATION';
            $this->why_we['transporation']['text'] = 'We transport your caravan to the camping and back.';

            $this->selling['header'] = 'SALE OF CARAVANS';
            $this->selling['details'] = 'DETAILS';
            $this->selling['more'] = 'SEE MORE';

            $this->modal_window['brand'] = 'BRAND';
            $this->modal_window['model'] = 'MODEL';
            $this->modal_window['size'] = 'SIZE';
            $this->modal_window['price'] = 'PRICE';
            $this->modal_window['year'] = 'YEAR';
            $this->modal_window['description'] = 'DESCRIPTION';

            $this->contacts['contact'] = 'CONTACTS';
            $this->contacts['location'] = 'LOCATION';
            $this->contacts['spanish'] = 'in Spanish';
            $this->contacts['english'] = 'in English';
            $this->contacts['every'] = 'every day';
            $this->contacts['name'] = 'Name';
            $this->contacts['phone'] = 'Phone number';
            $this->contacts['email'] = 'Email';
            $this->contacts['coment'] = 'Commentary';
            $this->contacts['submit'] = 'SUBMIT';

            $this->errors['name'] = 'Incorrect name';
            $this->errors['phone'] = 'Incorrect phone';
            $this->errors['email'] = 'Incorrect email';
            $this->errors['no_caravan'] = 'THERE ARE NO CARAVANS AT THIS TIME';

            $this->footer['copyright'] = '2018 Parking Caravaning Pascual';
        }
    }
}
