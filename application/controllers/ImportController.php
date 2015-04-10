<?php

class IndexController extends Zend_Controller_Action {

    public function indexAction() {

        /**
         * Export to PHP Array plugin for PHPMyAdmin
         * @version 0.2b
         */
//
// Database `obuwiewsieci2`
//
// `obuwiewsieci2`.`PRODUKTY`
        $PRODUKTY = array(
            array('ID' => '5465', 'NAZWA' => 'Sandały Azaleia 135 AZ130 Black 2010-026', 'CENA_BRUTTO' => '179.5', 'OPIS' => 'Sandały Azaleia 135 AZ130 Black

Damskie sandały znanej i lubianej marki Azaleia.
Fason znany również pod nazwą gladiatorki/rzymianki.
Wykonane z wysokiej jakości materiałów.
Bardzo lekkie!
Kolor czarny, który pasuje "do wszystkiego ".
Ozdobione srebrnymi dżetami, które dodaja im rozkowego charakteru.
Świetnie wyglądają zarówno do sukienek, spódnic jak i szortów.
Z całą pewnością zrobioą furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1428499462.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5464', 'NAZWA' => 'Sandały Gioseppo Bette Sand 2013-030', 'CENA_BRUTTO' => '219.5', 'OPIS' => 'Sandały Gioseppo Bette Sand

Damskie sandały znanej i lubianej marki Gioseppo.
Wykonane z wysokiej jakości materiałów.
Bardzo lekkie!
Wysoka, śwetnie wyprofilowana i bardzo stabilna koturna.
Wiązanie na kostce dodaje im niesamowitego uroku.
Połączenie kilku odcieni beżu oraz różu idealnie ożywi letnie stylizacje.
Pasują zarówno do sukienek, spódnic i szortów.
Idealne zarówno na plażę, jak i do biegania po mieście.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428498176.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5463', 'NAZWA' => 'Sandały Gioseppo Kim navy 2013-028', 'CENA_BRUTTO' => '219.5', 'OPIS' => 'Sandały Gioseppo Kim navy

Damskie sandały znanej i lubianej marki Gioseppo.
Wykonane z wysokiej jakości materiałów.
Bardzo lekkie!
Wysoka, śwetnie wyprofilowana i bardzo stabilna koturna.
Połączenie kilku kolorów idealnie ożywi letnie stylizacje.
Pasują zarówno do sukienek, spódnic i szortów.
Świetnie będą wyglądały z ubraniami w stylu marynarskim.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428497717.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5462', 'NAZWA' => 'Sandały Gioseppo Bette Black 2013-027', 'CENA_BRUTTO' => '219.5', 'OPIS' => 'Sandały Gioseppo Bette Black

Damskie sandały znanej i lubianej marki Gioseppo.
Wykonane z wysokiej jakości materiałów.
Bardzo lekkie!
Wysoka, świetnie wyprofilowana i bardzo stabilna koturna.
Wiązanie na kostce dodaje im niesamowitego uroku.
Połączenie kilku kolorów idealnie ożywi letnie stylizacje.
Pasują zarówno do sukienek, spódnic i szortów.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428497102.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5461', 'NAZWA' => 'Sandały Azaleia 654 Love650 Ivory 2001-008', 'CENA_BRUTTO' => '149.5', 'OPIS' => 'Sandały Azaleia 654 Love650 Ivory

Damskie sandały znanej i lubianej marki Azaleia.
Wykonane z wysokiej jakości materiałów.
Bardzo lekkie!
Wysoka, śwetnie wyprofilowana i bardzo stabilna koturna.
Wiązanie na kostce dodaje im niesamowitego uroku.
Połączenie kilku odcieni beżu idealnie ożywi letnie stylizacje.
Pasują zarówno do sukienek, spódnic i szortów.
Idealne zarówno na plażę, jak i do biegania po mieście.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428496184.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5460', 'NAZWA' => 'Japonki Gioseppo Huapi Grenn 2031-020', 'CENA_BRUTTO' => '119.5', 'OPIS' => 'Japonki Gioseppo Huapi Green

Damskie klapki znanej i lubianej marki Gioseppo.
Wykonane z wysokiej jakości skóry.
Połączenie brązu z kontrastową zieloenią tworzy fantastyczną całość, które idealnie ożywi letnie stylizacje!
Pasują zarówno do sukienek, spódnic i szortów.
Idealne zarówno na plażę, jak i do biegania po mieście.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428495594.jpg', 'RODZAJ' => '6', 'RODZAJ_NAZWA' => 'Japonki'),
            array('ID' => '5459', 'NAZWA' => 'Klapki Gioseppo Sarek Turquisa 2013-018', 'CENA_BRUTTO' => '119.5', 'OPIS' => 'Klapki Gioseppo Sarek Turquisa

Damskie klapki znanej i lubianej marki Gioseppo.
Wykonane z wysokiej jakości skóry.
Połączenie brązu z kontrastowym turkusem tworzy fantastyczną całość, które idealnie ożywi letnie stylizacje!
Pasują zarówno do sukienek, spódnic i szortów.
Idealne zarówno na plażę, jak i do biegania po mieście.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428495382.jpg', 'RODZAJ' => '8', 'RODZAJ_NAZWA' => 'Klapki'),
            array('ID' => '5458', 'NAZWA' => 'Klapki Gioseppo Manaus Red 2013-013', 'CENA_BRUTTO' => '99.5', 'OPIS' => 'Klapki Gioseppo Manaus Red

Damskie klapki znanej i lubianej marki Gioseppo.
Fason: japonki.
Wysoka, ale niesamowicie wygodna i dobrze wyprofilowana koturna.
Wykonane z najwyższej jakości materiałów - niezwykle miękkie i przyjemne w noszeniu.
Połączenie kilku idealnie pasujących do siebie kolorów tworzy fantastyczną całość, która ożywi letnie stylizacje.
Pasują zarówno do sukienek, spódnic i szortów.
Idealne zarówno na plażę, jak i do biegania po mieście.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428494028.jpg', 'RODZAJ' => '8', 'RODZAJ_NAZWA' => 'Klapki'),
            array('ID' => '5457', 'NAZWA' => 'Klapki Gioseppo Concheiro Black 2031-012', 'CENA_BRUTTO' => '89.5', 'OPIS' => 'Klapki Gioseppo Concheiro Black

Damskie klapki znanej i lubianej marki Gioseppo.
Fason: japonki.
Wysoka, ale niesamowicie wygodna i dobrze wyprofilowana koturna.
Wykonane z najwyższej jakości materiałów - niezwykle miękkie i przyjemne w noszeniu.
Pasują zarówno do sukienek, spódnic i szortów.
Idealne zarówno na plażę, jak i do biegania po mieście.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428493406.jpg', 'RODZAJ' => '8', 'RODZAJ_NAZWA' => 'Klapki'),
            array('ID' => '5456', 'NAZWA' => 'Sneakersy Guess FL2HDAFAL12 Blkbl 2051-056', 'CENA_BRUTTO' => '799.5', 'OPIS' => 'Sneakersy Guess FL2HDAFAL12 Blkbl 79950 056

Najmodniejsze w sezonie trampki na koturnie - sneakersy znanej i cenionej marki Guess.
Wykonane z najwyższej jakości materiałów.
Na języku sygnowane logiem marki Guess.
Ozdobione nabłyszczanymi wstawkami, które nadają im niesamowitego charakteru i niespotykanego wyglądu.
Ukryta koturna o wysokości 7,5 cm wspaniale modeluje sylwetkę.
Świetnie pasują zarówno do sportowych sukienek, spódnic , jak i zawsze modnych jeansów.
Sportowy look w najlepszym wydaniu!', 'KATEGORIA' => '1', 'FOTO1' => '_1428058085.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5455', 'NAZWA' => 'Sandały Gremax 2065 Czarny Lico 2051-021', 'CENA_BRUTTO' => '219.5', 'OPIS' => 'Sandały Gremax 2065 Czarny Lico

Niesamowicie wygodne sandały znanej i cenionej marki Gremax.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Wkładka również ze skóry naturalnej.
Niewielka, a zarazem bardzo stabilna koturna.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i zawsze modnych jeansów.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428053167.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5454', 'NAZWA' => 'Sandały Gremax 2065 Czarny Nubuk 2051-022', 'CENA_BRUTTO' => '219.5', 'OPIS' => 'Sandały Gremax 2065 Czarny Nubuk

Niesamowicie wygodne sandały znanej i cenionej marki Gremax.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Wkładka również ze skóry naturalnej.
Niewielka, a zarazem bardzo stabilna koturna.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i zawsze modnych jeansów.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428052954.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5453', 'NAZWA' => 'Sandały Gremax 2593 czarny Lico 2051-023', 'CENA_BRUTTO' => '265', 'OPIS' => 'Sandały Gremax 2593 czarny Lico

Niesamowicie wygodne sandały znanej i cenionej marki Gremax.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Wkładka również ze skóry naturalnej.
Niezwykle stabilny, a zarazem najmodniejszy obcas - słupek.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i zawsze modnych jeansów.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428052676.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5452', 'NAZWA' => 'Sandały Eva Frutos 5987 Petroleoc Roble 2051-137', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5987 Petroleo Roble

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Niezwykle stabilna i bardzo wygodna koturna.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i szortów!
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!
', 'KATEGORIA' => '1', 'FOTO1' => '_1428051678.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5451', 'NAZWA' => 'Sandały Eva Frutos 5716 Vaque Caoba 2051-135', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5716 Vaque Caoba

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Niezwykle stabilna i bardzo wygodna koturna.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i szortów!
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!
', 'KATEGORIA' => '1', 'FOTO1' => '_1428051488.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5450', 'NAZWA' => 'Sandały Eva Frutos 5707 Cuero Marron 2051-134', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5707 Cuero Marron

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Niezwykle stabilna i bardzo wygodna koturna.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i szortów!
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428050766.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5449', 'NAZWA' => 'Sandały Eva Frutos 5900 Marron Cuero 2051-136 ', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5900 Marron Cuero

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Niezwykle stabilna i bardzo wygodna koturna.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i szortów!
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!
', 'KATEGORIA' => '1', 'FOTO1' => '_1428050363.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5448', 'NAZWA' => 'Sandały Eva Frutos 5895 Marron Cuero 2051-138', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5895 Marron Cuero

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Niezwykle stabilny, a zarazem niezwykle modny obcas - słupek.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i szortów!
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428050172.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5447', 'NAZWA' => 'Sandały Eva Frutos 5895 Negro Plomo 2051-139', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5895 Negro Plomo

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Niezwykle stabilny, a zarazem niezwykle modny obcas - słupek.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sukienek, spódnic, spodni, jak i szortów!
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428050047.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5446', 'NAZWA' => 'Sandały Eva Frutos 5149 Marron Cuero 2051-132', 'CENA_BRUTTO' => '189.5', 'OPIS' => 'Sandały Eva Frutos 5149 Marron Cuero

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1428046805.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5445', 'NAZWA' => 'Sandały Eva Frutos 5353 Cuero 2051-128', 'CENA_BRUTTO' => '219.5', 'OPIS' => 'Sandały Eva Frutos 5353 Cuero

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427981710.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5444', 'NAZWA' => 'Sandały Eva Frutos 5057 Negro 2051-33', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5057 Negro

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej oraz gum.
Bardzo lekkie!
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427979960.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5443', 'NAZWA' => 'Sandały Eva Frutos 5054 Oro 2051129', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5054 Oro

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Ciężka podeszwa-platforma idealnie wyprofilowana.
Skórzana wkładka z dodatkową "gąbką",  sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427979561.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5442', 'NAZWA' => 'Sandały Eva Frutos 5054 Plata 2051-131', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5054 Plata

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Ciężka podeszwa-platforma idealnie wyprofilowana.
Skórzana wkładka z dodatkową "gąbką",  sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427978627.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5441', 'NAZWA' => 'Sandały Eva Frutos 5054 Plomo 2051-130', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Eva Frutos 5054 Plomo

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Ciężka podeszwa-platforma idealnie wyprofilowana.
Skórzana wkładka z dodatkową "gąbką",  sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427978298.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5440', 'NAZWA' => 'Sandały Eva Frutos 417 Beig. 2051-122', 'CENA_BRUTTO' => '199.5', 'OPIS' => 'Sandały Eva Frutos 417 Beig.

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427974433.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5439', 'NAZWA' => 'Sandały Eva Frutos 417 Taup 2051-123', 'CENA_BRUTTO' => '199.5', 'OPIS' => ' Sandały Eva Frutos 417 Taup

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427974112.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5438', 'NAZWA' => 'Sandały Eva Frutos 417 Negr 2051-124', 'CENA_BRUTTO' => '199.5', 'OPIS' => 'Sandały Eva Frutos 417 Negr

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Bardzo lekkie!
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427973837.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5437', 'NAZWA' => 'Sandały Eva Frutos 2693 Vaque Blanca 2051-25', 'CENA_BRUTTO' => '189.5', 'OPIS' => 'Sandały Eva Frutos 2693 Vaque Blanca

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427972760.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5436', 'NAZWA' => 'Sandały Eva Frutos 2693 Vaque Cuero 2051-127', 'CENA_BRUTTO' => '189.5', 'OPIS' => 'Sandały Eva Frutos 2693 Vaque Cuero

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427972481.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5435', 'NAZWA' => ' Sandały Eva Frutos 2693 Vaque Negra 18950 126', 'CENA_BRUTTO' => '189.5', 'OPIS' => ' Sandały Eva Frutos 2693 Vaque Negra

Niesamowicie wygodne sandały znanej i cenionej marki Eva Frutos.
Wykonane z najwyższej jakości skóry naturalnej - miękkiej i delikatnej.
Skórzana wkładka z dodatkową "gąbką", która sprawia, że są niezwykle miękkie i dopasowują się do stopy.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427972233.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5434', 'NAZWA' => 'Damskie obuwie sportowe Cravo Canela 94959-2 Fasco Champagne 2051-121', 'CENA_BRUTTO' => '329.5', 'OPIS' => 'Damskie obuwie sportowe Cravo Canela 94959-2 Fasco Champagne

Fantastyczne sportowe buty znanej i cenionej marki Cravo Canela.
Wykonane z najwyższej jakości skóry naturalnej o bardzo miękkiej strukturze.
Sygnowane logiem marki Cravo Canela.
Ozdobne zapięcie na rzep dodaje im niesamowitego uroku.
Kolor złoty, który idealnie pasuje do wiosenno-letnich stylizacji.
Świetnie będą wyglądały zarówno z sukienkami, jak i szortami czy zawsze modnymi jeansami.
Świetna jakość z najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427964142.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5433', 'NAZWA' => 'Damskie obuwie sportowe Cravo Canela 96714-4 Branco 2051-120', 'CENA_BRUTTO' => '289.5', 'OPIS' => 'Damskie obuwie sportowe Cravo Canela 96714-4 Branco

Fantastyczne sportowe buty znanej i cenionej marki Cravo Canela.
Wykonane z najwyższej jakości skóry naturalnej o bardzo miękkiej strukturze.
Wkładka z dodatkową gąbką, która dopasowuje się do stopy.
Sygnowane logiem marki Cravo Canela.
Kolor biały, który idealnie pasuje do wiosenno-letnich stylizacji.
Świetnie będą wyglądały zarówno z sukienkami, jak i szortami czy zawsze modnymi jeansami.
Świetna jakość z najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427963700.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5432', 'NAZWA' => 'Damskie obuwie sportowe Cravo Canela 96714-4 Champagne 2051-119', 'CENA_BRUTTO' => '289.5', 'OPIS' => 'Damskie obuwie sportowe Cravo Canela 96714-4 Champagne

Fantastyczne sportowe buty znanej i cenionej marki Cravo Canela.
Wykonane z najwyższej jakości skóry naturalnej o bardzo miękkiej strukturze.
Wkładka z dodatkową gąbką, która dopasowuje się do stopy.
Sygnowane logiem marki Cravo Canela.
Kolor złoty, który idealnie pasuje do wiosenno-letnich stylizacji.
Świetnie będą wyglądały zarówno z sukienkami, jak i szortami czy zawsze modnymi jeansami.
Świetna jakość z najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427963235.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5431', 'NAZWA' => 'Bama podpiętki żelowe 1400', 'CENA_BRUTTO' => '14', 'OPIS' => 'Bama podpiętki żelowe', 'KATEGORIA' => '3', 'FOTO1' => '_1427894183.jpg', 'RODZAJ' => '31', 'RODZAJ_NAZWA' => 'Wkładki'),
            array('ID' => '5430', 'NAZWA' => 'Bama zapiętki żelowe', 'CENA_BRUTTO' => '14', 'OPIS' => 'Bama zapiętki żelowe', 'KATEGORIA' => '3', 'FOTO1' => '_1427893987.jpg', 'RODZAJ' => '31', 'RODZAJ_NAZWA' => 'Wkładki'),
            array('ID' => '5429', 'NAZWA' => 'Wkładki do Japonek Bama ', 'CENA_BRUTTO' => '13', 'OPIS' => 'Wkładki do Japonek Bama ', 'KATEGORIA' => '3', 'FOTO1' => '_1427881552.jpg', 'RODZAJ' => '31', 'RODZAJ_NAZWA' => 'Wkładki'),
            array('ID' => '5428', 'NAZWA' => 'Wkładki Bama Alu Therm', 'CENA_BRUTTO' => '9', 'OPIS' => 'Wkładki Bama Alu Therm', 'KATEGORIA' => '3', 'FOTO1' => '_1427880798.jpg', 'RODZAJ' => '31', 'RODZAJ_NAZWA' => 'Wkładki'),
            array('ID' => '5427', 'NAZWA' => 'Wkładki Bama Wool', 'CENA_BRUTTO' => '8', 'OPIS' => 'Wkładki Bama Wool', 'KATEGORIA' => '3', 'FOTO1' => '_1427880417.jpg', 'RODZAJ' => '31', 'RODZAJ_NAZWA' => 'Wkładki'),
            array('ID' => '5426', 'NAZWA' => 'Wkładki Bama Deo Active', 'CENA_BRUTTO' => '16', 'OPIS' => 'Wkładki Bama Deo Active', 'KATEGORIA' => '3', 'FOTO1' => '_1427879706.jpg', 'RODZAJ' => '31', 'RODZAJ_NAZWA' => 'Wkładki'),
            array('ID' => '5425', 'NAZWA' => 'Łyżka Schuhloffel 42cm', 'CENA_BRUTTO' => '14', 'OPIS' => 'Metalowa łyżka do obuwia Schuhloffel 42cm', 'KATEGORIA' => '3', 'FOTO1' => '_1427879261.jpg', 'RODZAJ' => '47', 'RODZAJ_NAZWA' => 'Łyżki do butów'),
            array('ID' => '5424', 'NAZWA' => 'Łyżka Schuhanzieher 60cm', 'CENA_BRUTTO' => '8', 'OPIS' => 'Łyżka do obuwia Schuhanzieher 60cm', 'KATEGORIA' => '3', 'FOTO1' => '_1427879054.jpg', 'RODZAJ' => '47', 'RODZAJ_NAZWA' => 'Łyżki do butów'),
            array('ID' => '5423', 'NAZWA' => 'Łyżka Schuhanzieher 60cm', 'CENA_BRUTTO' => '8', 'OPIS' => 'Łyżka do obuwia Schuhanzieher 60cm ', 'KATEGORIA' => '3', 'FOTO1' => '_1427878859.jpg', 'RODZAJ' => '47', 'RODZAJ_NAZWA' => 'Łyżki do butów'),
            array('ID' => '5422', 'NAZWA' => 'Szpilki Zebra Sa 1535-525 Beż 2051-204', 'CENA_BRUTTO' => '329.5', 'OPIS' => 'Szpilki Zebra Sa 1535-525 Beż

Przepiękne szpilki marki ZEBRA.
Wykonane z najwyższej skóry naturalnej.
Fason do szpica, który już od kilku sezonów święci triumfy.
Wysoki, stabilny i dobrze wyważony obcas.
Kolor kremowy, który idealnie pasuje do wiosenno-letnich stylizacji.
Idealne zarówno do eleganckich, wieczorowych sukienek, klasycznych kostiumów, jak i zawsze modnych jeansów.
Z całą pewnością zachwycą niejedno spojrzenie.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427461631.jpg', 'RODZAJ' => '18', 'RODZAJ_NAZWA' => 'Szpilki'),
            array('ID' => '5421', 'NAZWA' => 'Sandały Azaleia 320-323 Beige 2051-212', 'CENA_BRUTTO' => '149.5', 'OPIS' => 'Sandały Azaleia 320-323 Beige

Niesamowicie wygodne buty o sportowym fasonie znanej i cenionej marki Azaleia.
Wykone z wysokiej jakości materiałów niezwykle przyjemnych dla skóry.
Klasyczny fason, zapinany na rzep - zarówno na kostce, jak i na palcach.
Takie sposób zapinania umożliwia dopasowanie do stopy.
Świetnie wyprofilowana podeszwa, charakterystyczna dla obuwia Azaleia .
Fason, który idealnie nadaje się na wycieczki, rower , na plażę albo do biegania po mieście.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427456822.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5420', 'NAZWA' => 'Sandały Azaleia 320-321 Black 2051-211', 'CENA_BRUTTO' => '149.5', 'OPIS' => 'Sandały Azaleia 320-321 Black

Niesamowicie wygodne buty o sportowym fasonie znanej i cenionej marki Azaleia.
Wykone z wysokiej jakości materiałów niezwykle przyjemnych dla skóry.
Klasyczny fason, zapinany na rzep - zarówno na kostce, jak i na palcach.
Takie sposób zapinania umożliwia dopasowanie do stopy.
Świetnie wyprofilowana podeszwa, charakterystyczna dla obuwia Azaleia .
Fason, który idealnie nadaje się na wycieczki, rower , na plażę albo do biegania po mieście.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427456447.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5419', 'NAZWA' => 'Damskie obuwie sportowe Rock Cross Fuschia Grey 2051-213', 'CENA_BRUTTO' => '145', 'OPIS' => 'Damskie obuwie sportowe Rock Cross Fuschia Grey

Niesamowiecie wygodne buty o sportowym fasonie znanej i cenionej marki ROCK.
Wykonane z kolorowych gumek, ozdobnie przeplatanych, które sprawiają, że buty nie tylko ciekawie wyglądają, ale również są niezwykle wygodne.
Świetnie wyprofilowana podeszwa, charakterystyczna dla obuwia ROCK.
Fason, który idealnie nadaje się na wycieczki, rower , albo do biegania po mieście.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427455850.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5418', 'NAZWA' => 'Damskie obuwie sportowe Rock Over Washed Blue Grey 2051-216', 'CENA_BRUTTO' => '145', 'OPIS' => 'Damskie obuwie sportowe Rock Over Washed Blue Grey

Niesamowiecie wygodne buty o sportowym fasonie znanej i cenionej marki ROCK.
Wykonane z kolorowych gumek, ozdobnie przeplatanych, które sprawiają, że buty nie tylko ciekawie wyglądają, ale również są niezwykle wygodne.
Świetnie wyprofilowana podeszwa, charakterystyczna dla obuwia ROCK.
Fason, który idealnie nadaje się na wycieczki, rower , albo do biegania po mieście.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427453307.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5417', 'NAZWA' => 'Damskie obuwie sportowe Rock Over Up Lt Green Blue Grey White 2051-215', 'CENA_BRUTTO' => '145', 'OPIS' => 'Damskie obuwie sportowe Rock Over Up Lt Green Blue Grey White

Niesamowiecie wygodne buty o sportowym fasonie znanej i cenionej marki ROCK.
Wykonane z kolorowych gumek, ozdobnie przeplatanych, które sprawiają, że buty nie tylko ciekawie wyglądają, ale również są niezwykle wygodne.
Świetnie wyprofilowana podeszwa, charakterystyczna dla obuwia ROCK.
Fason, który idealnie nadaje się na wycieczki, rower , albo do biegania po mieście.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427452371.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5416', 'NAZWA' => 'Damskie obuwie sportowe Rock Over Up Navy 2051-215', 'CENA_BRUTTO' => '145', 'OPIS' => 'Damskie obuwie sportowe Rock Over Up Navy

Niesamowiecie wygodne buty o sportowym fasonie znanej i cenionej marki ROCK.
Wykonane z kolorowych gumek, ozdobnie przeplatanych, które sprawiają, że buty nie tylko ciekawie wyglądają, ale również są niezwykle wygodne.
Świetnie wyprofilowana podeszwa, charakterystyczna dla obuwia ROCK.
Fason, który idealnie nadaje się na wycieczki, rower , albo do biegania po mieście.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427452070.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5415', 'NAZWA' => 'Szpilki Zebra Sa 1595-560 Krem 2051-203', 'CENA_BRUTTO' => '329.5', 'OPIS' => 'Szpilki Zebra Sa 1595-560 Krem

Przepiękne szpilki marki ZEBRA.
Wykonane z najwyższej skóry naturalnej.
Fason do szpica, który już od kilku sezonów święci triumfy.
Niezbyt wysoki, stabilny i dobrze wyważony obcas.
Kolor kremowy, który idealnie pasuje do wiosenno-letnich stylizacji.
Idealne zarówno do sukien ślubnych, eleganckich, wieczorowych sukienek, klasycznych kostiumów, jak i zawsze modnych jeansów.
Z całą pewnością zachwycą niejedno spojrzenie.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1427375655.jpg', 'RODZAJ' => '18', 'RODZAJ_NAZWA' => 'Szpilki'),
            array('ID' => '5414', 'NAZWA' => 'Mokasyny damskie Filipe Shoes 7513 vz Marin Ver Branco 2051-079', 'CENA_BRUTTO' => '289.5', 'OPIS' => 'Mokasyny damskie Filipe Shoes 7513 vz Marin Ver Branco

Mokasyny znanej i cenionej marki FILIPE.
Fason na niewielkiej koturnie, która dodaje im sportowego charakteru.
Wykonane z najwyższej jakości skory naturalnej lakierowanej- niezwykle miękkiej i delikatnej.
Kolor czarny z czerwono-białymi dodatkami.
Klasyczny fason, ozdobiony uroczą kokardką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427375078.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5413', 'NAZWA' => 'Baleriny Gremax 1281 Róż Lico 2051-020', 'CENA_BRUTTO' => '265', 'OPIS' => 'Baleriny Gremax 1281 Róż Lico

Baleriny znanej i cenionej marki GREMAX.
Wykonane z najwyższej jakości skory naturalnej - niezwykle miękkiej i delikatnej.
Kolor pudrowo różowy, który ożywi każdą wiosenno-letnią stylizację.
Klasyczny fason, ozdobiony uroczą kokardką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427281669.jpg', 'RODZAJ' => '1', 'RODZAJ_NAZWA' => 'Baleriny'),
            array('ID' => '5412', 'NAZWA' => 'Baleriny Gremax 1281 Czarny Lico 2051-019', 'CENA_BRUTTO' => '265', 'OPIS' => 'Baleriny Gremax 1281 Czarny Lico

Baleriny znanej i cenionej marki GREMAX.
Wykonane z najwyższej jakości skory naturalnej - niezwykle miękkiej i delikatnej.
Kolor czarny - uniwersalny i zawsze na czasie.
Klasyczny fason, ozdobiony uroczą kokardką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1427280979.jpg', 'RODZAJ' => '1', 'RODZAJ_NAZWA' => 'Baleriny'),
            array('ID' => '5411', 'NAZWA' => 'Japonki Armani Jeans A6561 38 Z2 Grey 2051-107', 'CENA_BRUTTO' => '199.5', 'OPIS' => 'Japonki Armani Jeans A6561 38 Z2 Grey

Najnowsza kolekcja fantastycznych, męskich japonek znanej i cenionej marki Armani Jeans.
Wykonane z najwyższej jakości materiałów, wyjątkowo przyjemnych dla stóp.
Na przodzie oraz podeszwie sygnowane logiem marki Armani Jeans.
Klasyczny fason, idealny zarówno na plażę, jak i na basen.
Z całą pewnością tak jak zeszłoroczne kolekcje zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1427279936.jpg', 'RODZAJ' => '6', 'RODZAJ_NAZWA' => 'Japonki'),
            array('ID' => '5410', 'NAZWA' => 'Mokasyny Armani Jeans 06588 55 Y5 Blue 2051-106', 'CENA_BRUTTO' => '549.5', 'OPIS' => 'Mokasyny Armani Jeans 06588 55 Y5 Blue

Męskie mokasyny znanej marki Armani Jeans, cenionej na całym świecie.
Wykonane z najwyższej jakości skóry naturalnej ( zarówno z zewnatrz, jak i wewnatrz ).
Kolor niebieski idealnie wpisuje sie w najmodniejsze trendy.
Pasują zarówno do wiosennych, jak i letnich stylizacji.
Pasują zarówno do sportowej elegancji, jak i casualowych stylizacji.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1427276846.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5409', 'NAZWA' => 'Szpilki Versace Jeans E0YLBS1376461511 2051-016', 'CENA_BRUTTO' => '799.5', 'OPIS' => 'Szpilki Versace Jeans E0YLBS1376461511

Przepiękne szpilki znanej i cenionej marki Versace Jeans.
Wykonane z najwyższej jakości skóry ekologicznej.
Wkładka ze skóry naturalnej.
Wysoki, ale dobrze wyważony i stabilny obcas.
Fason zwany gladiatorkami - jeden z najmodniejszych w tym sezonie.
Połączenie odcieni brązu przypominające wężową skórkę.
Świetnie pasują zarówno do eleganckich, wieczorowych kreacji, jak i zawsze modnych jeansów.
Elegancja w najlepszym wydaniu!', 'KATEGORIA' => '1', 'FOTO1' => '_1427276212.jpg', 'RODZAJ' => '18', 'RODZAJ_NAZWA' => 'Szpilki'),
            array('ID' => '5408', 'NAZWA' => 'Klapki Rieker 65958-00 Schwarz 2051-846', 'CENA_BRUTTO' => '229.5', 'OPIS' => 'Klapki Rieker 65958-00 Schwarz

Klasyczne, proste.
Świetne zarówno na plażę, jak i do biegania po mieście.
Wykonane z dbałością o każdy szczegół.
Świetne zarówno do jeansów, jak i sukienki!', 'KATEGORIA' => '1', 'FOTO1' => '_1427275570.jpg', 'RODZAJ' => '8', 'RODZAJ_NAZWA' => 'Klapki'),
            array('ID' => '5407', 'NAZWA' => 'Mokasyny Armani Jeans A6573 Z3 1P White 2051-105', 'CENA_BRUTTO' => '699.5', 'OPIS' => 'Mokasyny Armani Jeans A6573 Z3 1P White

Męskie mokasyny znanej marki Armani Jeans, cenionej na całym świecie.
Wykonane z najwyższej jakości skóry naturalnej ( zarówno z zewnatrz, jak i wewnatrz ).
Kolor biało-beżowy idealnie wpisuje sie w najmodniejsze trendy.
Ozdobione skórzanym sznurowaniem, które dodaje im niesamwitego uroku.
Pasują zarówno do wiosennych, jak i letnich stylizacji.
Pasują zarówno do sportowej elegancji, jak i casualowych stylizacji.
Najlepsza jakość w najlepszej cenie!
', 'KATEGORIA' => '2', 'FOTO1' => '_1426859687.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5406', 'NAZWA' => 'Mokasyny Hey Dude Farty incas beige 2051-098', 'CENA_BRUTTO' => '199.5', 'OPIS' => 'Męskie Mokasyny Hey Dude Farty incas beige

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426774395.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5405', 'NAZWA' => 'Mokasyny Hey Dude Farty denim blue 2051-096', 'CENA_BRUTTO' => '199.5', 'OPIS' => 'Męskie Mokasyny Hey Dude Farty denim blue

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426773952.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5404', 'NAZWA' => 'Mokasyny Hey Dude Farty Incas navy 2051-099', 'CENA_BRUTTO' => '199.5', 'OPIS' => 'Męskie Mokasyny Hey Dude Farty Incas navy

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426773671.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5403', 'NAZWA' => 'Mokasyny Hey Dude Farty funk grej 2051-097', 'CENA_BRUTTO' => '199.5', 'OPIS' => 'Męskie Mokasyny Hey Dude Farty funk grej

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426773427.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5402', 'NAZWA' => 'Mokasyny Hey Dude Wally funk ferro 2051-103', 'CENA_BRUTTO' => '229.5', 'OPIS' => 'Męskie Mokasyny Hey Dude Wally funk ferro

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426769518.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5401', 'NAZWA' => 'Mokasyny Hey Dude Wally Denim blue 2051-102', 'CENA_BRUTTO' => '229.5', 'OPIS' => 'Męskie Mokasyny Hey Dude Wally Denim blue

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426769114.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5400', 'NAZWA' => 'Mokasyny Hey Dude Riva blue coral 2051-100', 'CENA_BRUTTO' => '229.5', 'OPIS' => 'Męskie Mokasyny Hey Dude Riva blue coral

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426768895.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5399', 'NAZWA' => 'Mokasyny Hey Dude Wally beig 2051-101', 'CENA_BRUTTO' => '229.5', 'OPIS' => 'Męskie Półbuty Hey Dude Wally beig

Fantastyczne, męskie mokasyny znanej i cenionej marki Hey Dude.
Prosto z pachnącej winem Toskani.
Niesamowicie wygodne i miękkie.
Są tak lekkie, że mając je na nogach ma się wrażenie, że spaceruje się w kapciach ( w kolekcjach Hey Dude znajdują się mokasyny ważące zaledwie 14 dekagramów!)
Wierzch wykonany jest z bawełnianego płótna, które sprawia, że są wyjątkowo przewiewne.
Wkładka z grubej, sprężystej pianki pokrytej skórą naturalną.
Podeszwa amortyzuje stawy podczas chodzenia.
Buty nie pochłaniają zapachów i bakterii.
Nadają się zarówno do spacerowania po plaży, jak i biegania po mieście.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426768685.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5398', 'NAZWA' => 'Sandały Rieker 68872-60 beige kombi 2051-845', 'CENA_BRUTTO' => '249.5', 'OPIS' => 'Damskie Sandały Rieker 68872-60 beige kombi

Niesamowicie wygodne sandały znanej i lubianej marki RIEKER.
Wykonane z najwyższej jakości materiałów ( połączenie skóry naturalnej ze skórą ekologiczą i materiałem tekstylnym ).
Zapinane na rzep.
Świetnie wyprofilowana podeszwa, dopasowana do stopy.
Kolor beżowy - idealny na lato.
Sandały idealne na plażę, wycieczki oraz do biegania po mieście.
Najlepsza jakość w najwyższej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1426768350.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5397', 'NAZWA' => 'Mokasyny Filipe shoes 5166 ca Marinho 2051-069', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Mokasyny Filipe shoes 5166 ca Marinho

Mokasyny znanej i cenionej marki FILIPE.
Wykonane z najwyższej jakości skory naturalnej zamszowej- niezwykle miękkiej i delikatnej.
Kolor granatowy - uniwersalny, zawsze modny i na czasie.
Klasyczny fason, ozdobiony kokardką, która dodaje im niesamowitego uroku.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1426519459.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5396', 'NAZWA' => 'Mokasyny Filipe shoes 8130 ca/vc Amarelo/Camel 2051-074', 'CENA_BRUTTO' => '219.5', 'OPIS' => 'Mokasyny Filipe shoes 8130 ca/vc Amarelo/Camel

Mokasyny znanej i cenionej marki FILIPE.
Wykonane z najwyższej jakości skory naturalnej zamszowej- niezwykle miękkiej i delikatnej.
Kolor beżowo-rudy, który świetnie ożywi wiosenno-letnie stylizacje.
Klasyczny fason, ozdobiony skórzanym sznurowaniem, które dodaje im niesamowitego uroku.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1426519334.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5395', 'NAZWA' => 'Mokasyny Filipe shoes 7703 cc Preto 2051-073', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Mokasyny Filipe shoes 7703 cc Preto

Mokasyny znanej i cenionej marki FILIPE.
Lekko zaokrąglony fason przypominający baleriny.
Wykonane z najwyższej jakości skory naturalnej zamszowej- niezwykle miękkiej i delikatnej.
Kolor czarny- uniwersalny, zawsze modny i zawsze na czasie.
Klasyczny fason, ozdobiony uroczą klamerką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1426519102.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5394', 'NAZWA' => 'Mokasyny na koturnie Filipe Shoes 7513 vz Marinho 2051-075', 'CENA_BRUTTO' => '289.5', 'OPIS' => 'Mokasyny na koturnie Filipe Shoes 7513 vz Marinho

Mokasyny znanej i cenionej marki FILIPE.
Fason na niewielkiej koturnie, która dodaje im sportowego charakteru.
Wykonane z najwyższej jakości skory naturalnej lakierowanej- niezwykle miękkiej i delikatnej.
Kolor czarny- uniwersalny, zawsze modny i zawsze na czasie.
Klasyczny fason, ozdobiony uroczą kokardką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1426518910.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5393', 'NAZWA' => 'Baleriny Filipe shoes 5192 et Platina 2051-071', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Baleriny Filipe shoes 5195 et Platina

Baleriny znanej i cenionej marki FILIPE.
Wykonane z najwyższej jakości skory naturalnej - niezwykle miękkiej i delikatnej.
Kolor złoty, który nie tylko wygląda świeżo, ale też jest uniwersalny, zawsze modny i zawsze na czasie.
Klasyczny fason, ozdobiony uroczą kokardką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1426518647.jpg', 'RODZAJ' => '1', 'RODZAJ_NAZWA' => 'Baleriny'),
            array('ID' => '5392', 'NAZWA' => 'Baleriny Filipe shoes 5192 cc Marinho 2051-070', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Baleriny Filipe shoes 5192 cc Marinho

Baleriny znanej i cenionej marki FILIPE.
Wykonane z najwyższej jakości skory naturalnej - niezwykle miękkiej i delikatnej.
Kolor granatowy, który jest uniwersalny, zawsze modny i zawsze na czasie.
Klasyczny fason, ozdobiony uroczą kokardką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1426518422.jpg', 'RODZAJ' => '1', 'RODZAJ_NAZWA' => 'Baleriny'),
            array('ID' => '5391', 'NAZWA' => 'Baleriny Filipe shoes 5192 et Beige 2051-072', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Baleriny Filipe shoes 5192 et Beige

Baleriny znanej i cenionej marki FILIPE.
Wykonane z najwyższej jakości skory naturalnej - niezwykle miękkiej i delikatnej.
Kolor beżowy, który nie tylko wygląda świeżo, ale też jest uniwersalny, zawsze modny i zawsze na czasie.
Klasyczny fason, ozdobiony uroczą kokardką, która dodaje im niesamowitego uroku i kobiecości.
Świetnie wyglądają zarówno z kobiecymi sukienkami , spódnicami, jak i zawsze modnymi jeansami.
Z całą pewnością zrobią furorę!', 'KATEGORIA' => '1', 'FOTO1' => '_1426518295.jpg', 'RODZAJ' => '1', 'RODZAJ_NAZWA' => 'Baleriny'),
            array('ID' => '5390', 'NAZWA' => 'Mokasyny Filipe Shoes 5911 nb Marinho 2051-078', 'CENA_BRUTTO' => '399.5', 'OPIS' => 'Mokasyny Filipe Shoes 5911 nb Marinho

Męskie mokasyny znanej i cenionej marki FILIPE.
Niezwykle zgrabne, świetnie wyprofilowane.
Wykonane z najwyższej jakości miękkiej skóry naturalnej.
Ażurowy materiał dodaje im lekkości i sprawia, że są niezwykle przewiewne.
Ozdobione wiązaniem na przodzie.
Świetne do stylu casualowego.
Idealnie sprawdzą się do wiosenno-letnich stylizacji.
', 'KATEGORIA' => '2', 'FOTO1' => '_1426517876.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5389', 'NAZWA' => 'Mokasyny Filipe Shoes 5911 nb Preto 2051-077', 'CENA_BRUTTO' => '399.5', 'OPIS' => 'Mokasyny Filipe Shoes 5911 nb Preto

Męskie mokasyny znanej i cenionej marki FILIPE.
Niezwykle zgrabne, świetnie wyprofilowane.
Wykonane z najwyższej jakości miękkiej skóry naturalnej.
Ażurowy materiał dodaje im lekkości i sprawia, że są niezwykle przewiewne.
Ozdobione wiązaniem na przodzie.
Świetne do stylu casualowego.
Idealnie sprawdzą się do wiosenno-letnich stylizacji.
', 'KATEGORIA' => '2', 'FOTO1' => '_1426517743.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5388', 'NAZWA' => 'Mokasyny Filipe Shoes 5911 nb Castanho 2051-076', 'CENA_BRUTTO' => '399.5', 'OPIS' => 'Mokasyny Filipe Shoes 5911 nb Castanho

Męskie mokasyny znanej i cenionej marki FILIPE.
Niezwykle zgrabne, świetnie wyprofilowane.
Wykonane z najwyższej jakości miękkiej skóry naturalnej.
Ażurowy materiał dodaje im lekkości i sprawia, że są niezwykle przewiewne.
Ozdobione wiązaniem na przodzie.
Świetne do stylu casualowego.
Idealnie sprawdzą się do wiosenno-letnich stylizacji.
', 'KATEGORIA' => '2', 'FOTO1' => '_1426517495.jpg', 'RODZAJ' => '11', 'RODZAJ_NAZWA' => 'Mokasyny'),
            array('ID' => '5387', 'NAZWA' => 'Damskie obuwie sportowe Tommy Hilfiger Kesha 6d Midnight 2051-396', 'CENA_BRUTTO' => '299.5', 'OPIS' => 'Damskie obuwie sportowe Tommy Hilfiger Kesha 6d Midnight

Najnowsza kolekcja fantastycznych trampek znanej i cenionej marki TOMMY HILFIGER.
Wykonane z najwyższej jakości materiałów.
Z tyłu oraz na języku sygnowane logiem marki Tommy Hilfiger.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Kolor granatowy połączony z brązem i bielą - idealny do wiosenno-letnich stylizacji.
Z całą pewnością zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1426517050.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5386', 'NAZWA' => 'Damskie obuwie sportowe Tommy Hilfiger Victoria 2d Whit 2051-398', 'CENA_BRUTTO' => '289.5', 'OPIS' => 'Damskie obuwie sportowe Tommy Hilfiger Victoria 2d Whit

Najnowsza kolekcja fantastycznych trampek znanej i cenionej marki TOMMY HILFIGER.
Wykonane z najwyższej jakości materiałów.
Z tyłu oraz na języku sygnowane logiem marki Tommy Hilfiger.
Klasyczny fason, który idealnie pasuje zarówno do sportowych sukienek, szortów, spodni jak i legginsów.
Kolor biały, połączony z granatem sprawia, że wyglądają niezwykle świeżo i pasują do każdej wiosenno-letniej stylizacji.
Z całą pewnością zachwycą niejedno spojrzenie i znajdą wielu wielbicieli.
Świetna jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1426516624.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5385', 'NAZWA' => 'Sneakersy Tommy Hilfiger Stella 7c Beige/Gold 2051-397', 'CENA_BRUTTO' => '579.5', 'OPIS' => 'Sneakersy Tommy Hilfiger Stella 7c Beige Gold

Damskie buty sportowe marki Tommy Hilfiger, cenionej na całym świecie.
Jeden z najmodniejszy w sezonie fasonów, tzn. sneakersy.
Wykonane z najwyższej jakości materiałów ( połączenie skóry naturalnej z materiałem tekstylnym ).
Kolor beżowy, który idealnie wpisuje sie w najmodniejsze trendy.
Złote sznurówki dodają im niezwykłego uroku.
Język sygnowany logiem marki Tommy Hilfiger.
Jasna podeszwa nadaje im lekkości i sprawia, że pasują zarówno do wiosennych, jak i letnich stylizacji.
Model na ukrytej koturnie, która podnosi sylwetkę i wydłuża nogi.
Pasują zarówno do sportowych sukienek, legginsów, jak i zawsze modnych jeansów.
Najlepsza jakość w najlepszej cenie!
', 'KATEGORIA' => '1', 'FOTO1' => '_1426516274.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5384', 'NAZWA' => 'Sandały Versace Jeans E0YLBS8476467511 2051-013', 'CENA_BRUTTO' => '879.5', 'OPIS' => 'Sandały Versace Jeans E0YLBS8476467511

Przepiękne sandały na słupku znanej i cenionej marki Versace Jeans.
Wykonane z najwyższej jakości skóry ekologicznej.
Wkładka ze skóry naturalnej.
Wysoki, ale dobrze wyważony i stabilny obcas.
Z boku oraz na zamku sygnowane logiem marki Versace Jeans.
Fason zwany gladiatorkami - jeden z najmodniejszych w tym sezonie.
Połączenie odcieni brązu przypominające wężową skórkę.
Złoty obcas dodaje im niesamowitego uroku.
Świetnie pasują zarówno do eleganckich, wieczorowych kreacji, jak i zawsze modnych jeansów.
Elegancja w najlepszym wydaniu!', 'KATEGORIA' => '1', 'FOTO1' => '_1426515556.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5383', 'NAZWA' => 'Sandały Rieker 62464-33 Rot 2051-844', 'CENA_BRUTTO' => '229.5', 'OPIS' => 'Sandały Rieker 62464-33 Rot

Niezwykle wygodne sandały na niewielkiej koturnie znanej i cenionej marki RIEKER.
Wykonane z najwyższej jakości skóry naturalnej - niezwykle miękkiej i przyjemnej w dotyku.
Wkładka ze skóry ekologicznej.
Zapinane na kostce na rzep.
Odcień zgaszonej czerwieni idealnie ożywi każdą wiosenno-letnią stylizację.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! ', 'KATEGORIA' => '1', 'FOTO1' => '_1426515039.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5382', 'NAZWA' => 'Sandały Rieker 66177-64 Beige Komb 2051-843', 'CENA_BRUTTO' => '239.5', 'OPIS' => 'Sandały Rieker 66177-64 Beige Komb

Niezwykle wygodne sandały na niewielkiej koturnie znanej i cenionej marki RIEKER.
Wykonane z najwyższej jakości skóry naturalnej - niezwykle miękkiej i przzyjemnej w dotyku.
Odcienie beżu idealnie ożywią każdą wiosenno-letnią stylizację.
Ozdoba na przodzie i widoczne przeszycia dodają im kobiecości i niesamowitego uroku.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! ', 'KATEGORIA' => '1', 'FOTO1' => '_1426514720.jpg', 'RODZAJ' => '17', 'RODZAJ_NAZWA' => 'Sandały'),
            array('ID' => '5381', 'NAZWA' => 'Torebka Love Moschino Borsa Canvas St.Jungle Nero 2051-004', 'CENA_BRUTTO' => '739.5', 'OPIS' => 'Torebka Love Moschino Borsa Canvas St.Jungle Nero

Torebka znanej i cenionej,światowej marki LOVE MOSCHINO.
Wykonana z najwyższej jakości materiałów.
Połączenie czerni z kontastowymi, "żywymi" kolorami jest idealne do wiosenno-letnich stylizacji.
Na przodzie sygnowana logiem marki LOVE MOSCHINO.
Idealna zarówno do sukienek, kostiumów, jak i luźnych, codziennych zestawów.

Wymiary:
32 cm (26 cm góra) x 32 cm x 12 cm


* Buty widoczne na zdjęciu nie są częścią zestawu.
Dostępne w naszym sklepie w atrakcyjnej cenie!', 'KATEGORIA' => '3', 'FOTO1' => '_1426259584.jpg', 'RODZAJ' => '36', 'RODZAJ_NAZWA' => 'Torby i torebki'),
            array('ID' => '5380', 'NAZWA' => 'Espadryle Love Moschino Can.st.jungle Nero 2051-012', 'CENA_BRUTTO' => '379.5', 'OPIS' => 'Espadryle Love Moschino Can.st.jungle Nero

Niezwykle urocze espadryle znanej i cenionej marki LOVE MOSCHINO.
Wykonane z najwyższej jakości materiałów - wyjątkowo przyjemnych w dotyku.
Sznurkowa podeszwa sprawia, że są niezwykle wygodne.
Żywe kolory i kwiatowy wzór ożywią każdą wiosenno-letnią stylizację.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! 

* Torebka widoczna na zdjęciu nie jest częścią zestawu.
Dostępne w naszym sklepie w atrakcyjnej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1426259103.jpg', 'RODZAJ' => '48', 'RODZAJ_NAZWA' => 'Espadryle'),
            array('ID' => '5379', 'NAZWA' => 'Torebka Love Moschino Borsa Canvas St.Jungle Bianco 2051-003', 'CENA_BRUTTO' => '739.5', 'OPIS' => 'Torebka Love Moschino Borsa Canvas St.Jungle Bianco

Torebka znanej i cenionej,światowej marki LOVE MOSCHINO.
Wykonana z najwyższej jakości materiałów.
Połączenie wielu "żywych" kolorów - idealne do wiosenno-letnich stylizacji.
Na przodzie sygnowana logiem marki LOVE MOSCHINO.
Idealna zarówno do sukienek, kostiumów, jak i luźnych, codziennych stylizacji.

Wymiary:
33 cm (44 cm góra) x 29,5 cm x 15 cm


* Buty widoczne na zdjęciu nie są częścią zestawu.
Dostępne w naszym sklepie w atrakcyjnej cenie!', 'KATEGORIA' => '3', 'FOTO1' => '_1426258947.jpg', 'RODZAJ' => '36', 'RODZAJ_NAZWA' => 'Torby i torebki'),
            array('ID' => '5378', 'NAZWA' => 'Espadryle Love Moschino Can.St.jungle Bian 2051-011', 'CENA_BRUTTO' => '379.5', 'OPIS' => 'Espadryle Love Moschino Can.St.jungle Bian

Niezwykle urocze espadryle znanej i cenionej marki LOVE MOSCHINO.
Wykonane z najwyższej jakości materiałów - wyjątkowo przyjemnych w dotyku.
Sznurkowa podeszwa sprawia, że są niezwykle wygodne.
Żywe kolory i kwiatowy wzór ożywią każdą wiosenno-letnią stylizację.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! 

* Torebka widoczna na zdjęciu nie jest częścią zestawu.
Dostępne w naszym sklepie w atrakcyjnej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1426258718.jpg', 'RODZAJ' => '48', 'RODZAJ_NAZWA' => 'Espadryle'),
            array('ID' => '5377', 'NAZWA' => 'Espadryle Love Moschino Intr.etnico Multic 2051-010', 'CENA_BRUTTO' => '479.5', 'OPIS' => 'Love Moschino Intr.etnico Multic

Niezwykle urocze espadryle znanej i cenionej marki LOVE MOSCHINO.
Wykonane z najwyższej jakości materiałów - wyjątkowo przyjemnych w dotyku.
Sznurkowa podeszwa sprawia, że są niezwykle wygodne.
Żywe, jaskrawe kolory ożywią każdą wiosenno-letnią stylizację.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! 

* Torebka widoczna na zdjęciu nie jest częścią zestawu.
', 'KATEGORIA' => '1', 'FOTO1' => '_1426258553.jpg', 'RODZAJ' => '48', 'RODZAJ_NAZWA' => 'Espadryle'),
            array('ID' => '5376', 'NAZWA' => 'Torebka Love Moschino Borsa Safino PVC Arancio 2051-001', 'CENA_BRUTTO' => '829.5', 'OPIS' => 'Torebka Love Moschino Borsa Safino PVC Arancio

Torebka znanej i cenionej,światowej marki LOVE MOSCHINO.
Wykonana z najwyższej jakości materiałów.
Połączenie koloru srebrnego z neonowym pomarańczowym - idealne do wiosenno-letnich stylizacji.
Zamykana na magnes.
W środku 1 duża komora, dodatkowa mała torebka/portfel oraz  kilka przegródek ( na klucze i telefon ).
Na przodzie sygnowana logiem marki LOVE MOSCHINO.
Idealna zarówno do sukienek, kostiumów, jak i luźnych, codziennych stylizacji.

Wymiary:
26cm x 19 cm x 30 cm 
wysokość rączek: 22 cm

* Buty widoczne na zdjęciu nie są częścią zestawu.
Dostępne w naszym sklepie w atrakcyjnej cenie!', 'KATEGORIA' => '3', 'FOTO1' => '_1426256772.jpg', 'RODZAJ' => '36', 'RODZAJ_NAZWA' => 'Torby i torebki'),
            array('ID' => '5375', 'NAZWA' => 'Torebka Love Moschino Borsa Safino PVC Giallo 2051-002', 'CENA_BRUTTO' => '829.5', 'OPIS' => 'Torebka Love Moschino Borsa Safino PVC Giallo

Torebka znanej i cenionej,światowej marki LOVE MOSCHINO.
Wykonana z najwyższej jakości materiałów.
Połączenie koloru srebrnego z neonowym żółtym - idealne do wiosenno-letnich stylizacji.
Zamykana na magnes.
W środku 1 duża komora, dodatkowa mała torebka/portfel oraz  kilka przegródek ( na klucze i telefon ).
Na przodzie sygnowana logiem marki LOVE MOSCHINO.
Idealna zarówno do sukienek, kostiumów, jak i luźnych, codziennych stylizacji.

Wymiary:
26cm x 19 cm x 30 cm 
wysokość rączek: 22 cm

* Buty widoczne na zdjęciu nie są częścią zestawu.
Dostępne w naszym sklepie w atrakcyjnej cenie!', 'KATEGORIA' => '3', 'FOTO1' => '_1426256532.jpg', 'RODZAJ' => '36', 'RODZAJ_NAZWA' => 'Torby i torebki'),
            array('ID' => '5374', 'NAZWA' => 'Espadryle Love Moschino Canvas Nero 2051-013', 'CENA_BRUTTO' => '399.5', 'OPIS' => 'Espadryle Love Moschino Canvas Nero

Niezwykle urocze espadryle znanej i cenionej marki LOVE MOSCHINO.
Wykonane z najwyższej jakości materiałów - wyjątkowo przyjemnych w dotyku.
Sznurkowa podeszwa sprawia, że są niezwykle wygodne.
Kolor czarny- uniwersalny i zawsze na czasie.
Wyszywana złoto-czerwona ozdoba dodaje im niesamowitego uroku.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! ', 'KATEGORIA' => '1', 'FOTO1' => '_1426255854.jpg', 'RODZAJ' => '48', 'RODZAJ_NAZWA' => 'Espadryle'),
            array('ID' => '5373', 'NAZWA' => 'Espadryle Love Moschino Canvas Fluo Aranci 2051-015', 'CENA_BRUTTO' => '399.5', 'OPIS' => 'Espadryle Love Moschino Canvas Fluo Aranci

Niezwykle urocze espadryle znanej i cenionej marki LOVE MOSCHINO.
Wykonane z najwyższej jakości materiałów - wyjątkowo przyjemnych w dotyku.
Sznurkowa podeszwa sprawia, że są niezwykle wygodne.
Kolor pomarańczowy- delikatnie neonowy ożywi każdą wiosenno-letnią stylizację.
Delikatne, ozdobne serduszka dodają im niesamowitego uroku.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! 

* Torba LOVE MOSCHINO widoczna na zdjęciu nie jest częścią zestawu.
Dostępna w naszym sklepie w atrakcyjnej cenie!

* Torebka widoczna na zdjęciu nie jest częścią zestawu.', 'KATEGORIA' => '1', 'FOTO1' => '_1426255489.jpg', 'RODZAJ' => '48', 'RODZAJ_NAZWA' => 'Espadryle'),
            array('ID' => '5372', 'NAZWA' => 'Espadryle Love Moschino Canvas Fluo Giallo 2051-014', 'CENA_BRUTTO' => '399.5', 'OPIS' => 'Espadryle Love Moschino Canvas Fluo Giallo

Niezwykle urocze espadryle znanej i cenionej marki LOVE MOSCHINO.
Wykonane z najwyższej jakości materiałów - wyjątkowo przyjemnych w dotyku.
Sznurkowa podeszwa sprawia, że są niezwykle wygodne.
Kolor żółty-neonowy ożywi każdą wiosenno-letnią stylizację.
Delikatne, ozdobne serduszka dodają im niesamowitego uroku.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! 

* Torba LOVE MOSCHINO widoczna na zdjęciu nie jest częścią zestawu.
Dostępna w naszym sklepie w atrakcyjnej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1426255295.jpg', 'RODZAJ' => '48', 'RODZAJ_NAZWA' => 'Espadryle'),
            array('ID' => '5371', 'NAZWA' => 'Espadryle Love Moschino Canvas Fluo Fuxia 2051-016', 'CENA_BRUTTO' => '399.5', 'OPIS' => 'Espadryle Love Moschino Canvas Fluo Fuxia

Niezwykle urocze espadryle znanej i cenionej marki LOVE MOSCHINO.
Wykonane z najwyższej jakości materiałów - wyjątkowo przyjemnych w dotyku.
Sznurkowa podeszwa sprawia, że są niezwykle wygodne.
Kolor różowy-neonowy ożywi każdą wiosenno-letnią stylizację.
Delikatne, ozdobne serduszka dodają im niesamowitego uroku.
Pasują zarówno do sukienek, spódnic, jak i zawsze modnych jeansów.
Idealne do biegania na codzień! ', 'KATEGORIA' => '1', 'FOTO1' => '_1426255169.jpg', 'RODZAJ' => '48', 'RODZAJ_NAZWA' => 'Espadryle'),
            array('ID' => '5370', 'NAZWA' => 'Szpilki Versace Jeans E0YLBS7376465899 2051-011', 'CENA_BRUTTO' => '849.5', 'OPIS' => 'Szpilki Versace Jeans E0YLBS7376465899

Przepiękne sandały na szpilce znanej i cenionej marki Versace Jeans.
Wykonane z najwyższej jakości skóry ekologicznej.
Wysoki, ale dobrze wyważony i stabilny obcas.
Z boku sygnowane logiem marki Versace Jeans.
Kolor czarny - uniwersalny i zawsze na czasie.
Świetnie pasują zarówno do eleganckich, wieczorowych kreacji, jak i zawsze modnych jeansów.
Elegancja w najlepszym wydaniu!', 'KATEGORIA' => '1', 'FOTO1' => '_1426171857.jpg', 'RODZAJ' => '18', 'RODZAJ_NAZWA' => 'Szpilki'),
            array('ID' => '5369', 'NAZWA' => 'Szpilki Versace Jeans E0YLBS8376460899 2051-012', 'CENA_BRUTTO' => '839.5', 'OPIS' => 'Szpilki Versace Jeans E0YLBS8376460899

Przepiękne sandały na szpilce znanej i cenionej marki Versace Jeans.
Model zwany również "gladiatorkami".
Wykonane z najwyższej jakości skóry ekologicznej.
Wysoki, ale dobrze wyważony i stabilny obcas.
Z boku sygnowane logiem marki Versace Jeans.
Kolor czarny - uniwersalny i zawsze na czasie.
Świetnie pasują zarówno do eleganckich, wieczorowych kreacji, jak i zawsze modnych jeansów.
Elegancja w najlepszym wydaniu!', 'KATEGORIA' => '1', 'FOTO1' => '_1426171595.jpg', 'RODZAJ' => '18', 'RODZAJ_NAZWA' => 'Szpilki'),
            array('ID' => '5368', 'NAZWA' => 'Damskie obuwie sportowe Versace Jeans E0YLBSA275759427 2051-009', 'CENA_BRUTTO' => '519.5', 'OPIS' => 'Damskie obuwie sportowe Versace Jeans E0YLBSA275759427

Damskie buty sportowe znanej i cenionej marki Versace Jeans, cenionej na całym świecie.
Fason tzn. skechers.
Wykonane z najwyższej jakości materiałów ( połączenie materiałów tekstylnych ze skórą naturalną ).
Kolor beżowy - idealny do wiosenno-letnich stylizacji.
Zlote, błyszczące wstawki dodają im niezwykłego charakteru i sprawiają, że nikt nie przejdzie obojętnie.
Na języku sygnowane logiem marki Versace Jeans.
Jasna podeszwa nadaje im lekkości i sprawia, że pasują zarówno do wiosennych, jak i letnich stylizacji.
Świetnie pasują do sportowych stylizacji na codzień, jak i na siłownię.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '1', 'FOTO1' => '_1426171062.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5367', 'NAZWA' => 'Męskie obuwie sportowe Versace Jeans E0YLB0177055899 2051-015', 'CENA_BRUTTO' => '519.5', 'OPIS' => 'Męskie obuwie sportowe Versace Jeans E0YLB0177055899

Męskie buty sportowe znanej marki Versace Jeans, cenionej na całym świecie.
Wykonane z najwyższej jakości materiałów ( połączenie skóry naturalnej z materiałem tekstylnym ).
Kolor czarny - zawsze modny i zawsze na czasie.
Na języku sygnowane logiem marki Versace Jeans.
Jasna podeszwa nadaje im lekkości i sprawia, że pasują zarówno do wiosennych, jak i letnich stylizacji.
Idealne do sportowych stylizacji.
Najlepsza jakość w najlepszej cenie!
', 'KATEGORIA' => '2', 'FOTO1' => '_1426170106.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe'),
            array('ID' => '5366', 'NAZWA' => 'Męskie obuwie sportowe Versace Jeans E0YLB0177055202 2051-014', 'CENA_BRUTTO' => '519.5', 'OPIS' => 'Męskie obuwie sportowe Versace Jeans E0YLB0177055202

Męskie buty sportowe znanej marki Versace Jeans, cenionej na całym świecie.
Wykonane z najwyższej jakości materiałów ( połączenie skóry naturalnej z materiałem tekstylnym ).
Kolor niebieski idealnie wpisuje się w najmodniejsze trendy.
Na języku sygnowane logiem marki Versace Jeans.
Jasna podeszwa nadaje im lekkości i sprawia, że pasują zarówno do wiosennych, jak i letnich stylizacji.
Idealne do sportowych stylizacji.
Najlepsza jakość w najlepszej cenie!', 'KATEGORIA' => '2', 'FOTO1' => '_1426169814.jpg', 'RODZAJ' => '12', 'RODZAJ_NAZWA' => 'Obuwie sportowe')
        );

        $view = '';

        $is = array();

        foreach ($PRODUKTY as $p) {

            /* if (!isset($is[$p['RODZAJ']])) {
              $view .= "INSERT INTO type values ({$p['RODZAJ']}, '{$p['RODZAJ_NAZWA']}');<br/>";
              $is[$p['RODZAJ']] = true;
              } */

            //$view .= "INSERT INTO product values ({$p['ID']}, '{$p['NAZWA']}', '{$p['OPIS']}', {$p['CENA_BRUTTO']});<br/>";
            //$view .= "INSERT INTO product_foto values ({$p['ID']}, '{$p['FOTO1']}');<br/>";
            //$view .= "INSERT INTO product_type values ({$p['ID']}, {$p['RODZAJ']});<br/>";
            //$view .= "INSERT INTO product_type values ({$p['ID']}, 100{$p['KATEGORIA']});<br/>";
        }
        $this->view->view = $view;
    }

}
