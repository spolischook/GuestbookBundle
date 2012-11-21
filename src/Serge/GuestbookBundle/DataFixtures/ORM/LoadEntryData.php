<?php
/**
 * Created by spolischook
 */

namespace Serge\GuestbookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Serge\GuestbookBundle\Entity\Entry;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $oEntry = new Entry();
        $oEntry->setName('Serge');
        $oEntry->setEmail('serge@ukr.net');
        $oEntry->setMessage('Поскольку земной шар не круглый, а продолговатый, он должен быть под контентом,
            иметь градиент и отстоять от контента на 3 см справа и слева (из ТЗ на дизайн сайта)'
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Vooova');
        $oEntry->setEmail('stupid@hel.net');
        $oEntry->setMessage('Дизайн всех трех сайтов должен быть выдержан в единой стилистике.
            Поэтому мы считаем, что с точки зрения дизайна всю работу можно рассматривать как один сайт. '
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Yahooo');
        $oEntry->setEmail('another@email.com');
        $oEntry->setMessage('Вам необходимо выполнить тестовое задание - нарисовать пакет баннеров для нашего
            сайта по нашим требованиям. Далее, если баннеры нам понравятся, мы их размещаем на нашем сайте,
            ждем от нескольких дней до нескольких недель, и, если продажи повышаются, то мы берем вас в штат.'
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Stupid');
        $oEntry->setEmail('blonda@mail.ru');
        $oEntry->setMessage('А можно я всем буду говорить, что я за сайт отдала 1000 рублей,а не 5000,
            а то меня засмеют, что фрилансеру так много заплатила'
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Mif');
        $oEntry->setEmail('mif@clientsfromhell.ru');
        $oEntry->setMessage('Примерные пожелания по логотипу: танцор, из него вырывается бегущая лошадь
            на фоне звезды, вид танцора желательно не менять, а вот лошадь можно сделать по соотношению
            к танцору как 80/20 по яркости в логотипе, основная деталь - танцор, а лошадь больше похоже на миф.'
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('great');
        $oEntry->setEmail('great@clientsfromhell.ru');
        $oEntry->setMessage('Фирменный стиль мы тоже как-нибудь сами, но элементы будем брать исходя из дизайна,
            поэтому дизайн должен быть с ярко выраженным фирменным стилем'
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Another');
        $oEntry->setEmail('em@clientsfromhell.ru');
        $oEntry->setMessage('Вот вы нарисовали обычную стальную трубочку, а мне нужно показать,
            что она сделана именно из гафния. У него такой особый блеск, он не сильно, но отличается от стали.
            Нет, подписывать, конечно, не нужно, попробуйте передать художественно '
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Lider');
        $oEntry->setEmail('am@clientsfromhell.ru');
        $oEntry->setMessage('Стоматологи о дизайне: - Нам что-то солидное нужно на сайте, подложка в коже,
            на ней - улыбка из фотографий с зубами и протезами, фон не очень тёмный, сбоку должна девушка выглядывать
            как путеводитель, короче сайт должен внушать мощь. '
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Funny');
        $oEntry->setEmail('om@clientsfromhell.ru');
        $oEntry->setMessage('Вот вы мне предложили 4 варианта логотипа, я выбираю 1, теперь возвращайте мне
            3/4 моей оплаты, ведь я беру только 1 вариант, мне все 4 не нужны! '
        );
        $manager->persist($oEntry);

        $oEntry = new Entry();
        $oEntry->setName('Stupid');
        $oEntry->setEmail('jm@clientsfromhell.ru');
        $oEntry->setMessage('Требуется создать дизайн сайта для малобюджетного частного крематория.
            Особых графических изысков не требуется — должно смотрется строго и печально в любом доступном браузере.'
        );
        $manager->persist($oEntry);



        $manager->flush();
    }
}

?>