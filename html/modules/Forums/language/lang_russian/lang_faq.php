<?php
/***************************************************************************
 *                          lang_faq.php [Russian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4 2001/12/15 16:42:08 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Translation performed by Eduard Chesnokov (Kristo)
// edik@novline.ru
// Edited by Alexey V. Borzov (borz_off)
// borz_off@rdw.ru
//


$faq[] = array("--","Вход на форум и регистрация");
$faq[] = array("Почему я не могу войти?", "А вы зарегистрировались? Серьёзно, вы должны быть зарегистрированы, для того чтобы войти. Может быть вам закрыли доступ на этот форум (вы увидите сообщение если это так)? Если так, то вам лучше связаться с администратором или вебмастером, чтобы выяснить, почему это произошло. Если вы были зарегистрированы и вам не закрыли доступ, то проверьте, правильно ли вы вводите имя и пароль. Обычно проблема именно в этом, если же нет, то свяжитесь с администратором, возможно, он неправильно настроил форум.");
$faq[] = array("Зачем мне вообще нужно регистрироваться?", "Вы можете этого и не делать. Всё зависит от того, как администратор настроил форум: должны ли вы зарегистрироваться, чтобы размещать сообщения или нет. Тем не менее, регистрация дает вам дополнительные возможности, которые недоступны анонимным пользователям: аватары, личные сообщения, отправка E-mail, участие в группах и т.д. Регистрация отнимет у вас всего пару минут, поэтому мы рекомендуем это сделать.");
$faq[] = array("Почему меня автоматически отключает?", "Если вы не отметили галочкой пункт <i>Входить автоматически</i>, вы сможете оставаться под своим именем на форуме только некоторое время. Это сделано для того, чтобы никто другой не смог воспользоваться вашей учетной записью. Для того, чтобы вас автоматически не отключало от форума, вы можете выбрать пункт <i>Входить автоматически</i>, но мы не рекомендуем вам делать это на общедоступном компьютере, например в библиотеке, интернет-кафе, университете и т.д.");
$faq[] = array("Как сделать, чтобы я не появлялся в списке активных пользователей?", "В настройках вашего профиля вы найдете опцию <i>Скрывать ваше пребывание на форуме</i>, если вы выберете <i>Да</i>, то вы будете видны только администраторам и самому себе. Для всех остальных вы будете показываться как скрытый пользователь.");
$faq[] = array("Я забыл пароль!", "Не паникуйте! Хотя ваш пароль и не может быть восстановлен, вам может быть присвоен новый. Для этого кликните на <u>Я забыл пароль</u>, следуйте инструкциям, и скоро вы снова сможете войти на форум");
$faq[] = array("Я зарегистрирован, но не могу войти!", "Первое: проверьте, правильно ли вы ввели имя и пароль. Второе: возможно, ваша учетная запись требует активизации. Некоторые форумы требуют, чтобы все новые пользователи были активизированы самостоятельно либо администратором форума до того, как вы сможете в него войти. Главная причина, по которой требуется активизация, — она уменьшает возможности для анонимных злоупотреблений в форуме. Когда вы завершали процесс регистрации, вам было сказано, требуется активизация или нет. Если вам был прислан E-mail, то следуйте инструкциям в письме, если вы не получили письмо, то убедитесь, что указали правильный адрес E-mail.  Если же вы уверены, что ввели правильный адрес E-mail, то свяжитесь с администратором форума.");
$faq[] = array("Я был зарегистрирован, но больше не могу войти!", "Наиболее вероятные причины: вы ввели неверное имя или пароль (проверьте письмо, которое вам прислали, когда вы зарегистрировались) или администратор удалил вашу учётную запись по каким-то причинам. Если верно второе, то возможно вы не оставили ни одного сообщения? Администраторы могут удалять неактивных пользователей, чтобы уменьшить размер базы данных. Попробуйте зарегистрироваться снова и принять участие в дискуссиях.");


$faq[] = array("--","Параметры и настройки пользователя");
$faq[] = array("Как мне изменить мои настройки?", "Все ваши настройки хранятся в базе данных (если вы зарегистрированы). Чтобы изменить их, перейдите в раздел <u>Профиль</u> (обычно ссылка на него находится вверху форума, но могут быть и исключения). Там вы можете изменить все свои настройки");
$faq[] = array("В форумах неправильное время!", "Время обычно правильное, но вы можете видеть время, относящееся к другому часовому поясу, не к тому, в котором находитесь вы. В этом случае вы можете изменить часовой пояс на тот, в котором вы находитесь: Москва, Киев и т.д. Пожалуйста, учтите, что для смены часового пояса, как и для смены большинства настроек, требуется быть зарегистрированным пользователем.");
$faq[] = array("Я изменил часовой пояс, но время все равно неправильное!", "Если вы уверены, что указали часовой пояс правильно, то причина может быть в летнем времени. Этот форум не умеет работать с летним временем, так что в период действия летнего времени может появляться разница в один час с реальным временем.");
$faq[] = array("Моего языка нет в списке!", "Причина скорее всего в том, что администратор не установил поддержку вашего языка в форуме, или же просто никто не перевёл этот форум на ваш язык. Попробуйте узнать у администратора форума, может ли он установить требуемый язык. Если же поддержки нужного языка пока не существует, то вы сами можете перевести этот форум на свой язык. Дополнительную информацию вы можете получить на сайте Группы phpBB (ссылка есть внизу страницы)");
$faq[] = array("Как я могу поместить картинку под своим именем?", "Под именем пользователя могут быть две картинки. Первая картинка относится к вашему званию, обычно это звёздочки, указывающие на то, сколько сообщений вы оставили в форуме или на ваш статус в этом форуме. Чуть ниже может находиться картинка побольше, которая называется «аватара». Эта картинка обычно уникальна для каждого пользователя. От администраторов зависит, включена ли поддержка аватар, и от них же зависит, какие аватары могут быть использованы. Если в данном форуме не включена поддержка аватар, то это решение администраторов, вы можете выяснить у них причины.");
$faq[] = array("Как я могу изменить свое звание?", "Обычно вы не можете напрямую изменить свое звание (звание отображается ниже вашего имени в созданном вами сообщении или теме, а так же в вашем профиле, в зависимости от используемого стиля). Большинство форумов используют звания, чтобы показать какое количество сообщений было написано и чтобы идентифицировать определенных пользователей: например модераторы и администраторы могут иметь специальные звания. Пожалуйста, не засоряйте форум ненужными сообщениями только для того, чтобы повысить ваше звание, за это модератор или администратор может просто понизить количество отправленных вами сообщений.");
$faq[] = array("Когда я щёлкаю по ссылке «Отправить E-mail», от меня требуют войти?", "Только зарегистрированные пользователи могут посылать E-mail через встроенную в форум форму (если эта возможность вообще разрешена администратором). Это сделано для того, чтобы предотвратить злоупотребления системой E-mail анонимными пользователями.");


$faq[] = array("--","Создание сообщений");
$faq[] = array("Как мне создать тему в форуме?", "Легко, щёлкните по соответствующей кнопке в окне форума или темы. Вам, возможно, придется зарегистрироваться прежде чем отправить сообщение. То что вы можете делать в данном форуме перечислено внизу страницы форума и темы (<i>Вы можете начинать темы в этом форуме, Вы можете отвечать на сообщения и т.д.<i>)");
$faq[] = array("Как я могу редактировать или удалить сообщение?", "Если вы не администратор или модератор форума, вы можете редактировать и удалять только свои собственные сообщения. Вы можете редактировать сообщение (иногда только в течении некоторого времени с момента создания) щёлкнув по кнопке <i>Редактировать</i>, относящейся к данному сообщению. Если кто-то уже ответил на ваше сообщение, то под ним появится небольшая надпись, она показывает сколько раз вы редактировали сообщение. Эта надпись не появляется, если никто не отвечал на ваше сообщение, она также не появляется, если ваше сообщение отредактировал администратор или модератор (они должны сами оставить пометку, где сказано, почему они это сделали). Учтите, что обычные пользователи не могут удалить сообщение, если на него уже кто-то ответил.");
$faq[] = array("Как присоединить подпись к моему сообщению?", "Для того чтобы присоединить подпись, вы должны сначала создать её в своем профиле. После создания вы должны отметить галочкой пункт <i>Присоединить подпись</i> в форме отправки сообщения, чтобы подпись добавилась. Вы также можете сделать чтобы подпись присоединялась по умолчанию, если отметите соответствующий пункт в вашем профиле (но и после этого вы сможете отключить подпись в определенных сообщениях, убрав галочку <i>Присоединить  подпись</i>)");
$faq[] = array("Как создать опрос?", "Создать опрос легко: когда вы создаёте тему (или редактируете первое сообщение в теме, если у вас есть на это права) чуть ниже основной формы для создания сообщений, вы увидите форму <i>Создать опрос</i>. Если же вы её не видите, то скорее всего у вас нет прав на создание опроса. Вы должны ввести тему опроса, затем как минимум два варианта ответа (чтобы добавить вариант ответа, введите его и щёлкните кнопку <i>Добавить вариант</i>. Вы также можете установить лимит времени на опрос, 0 означает постоянный опрос. Также существует ограничение на количество вариантов ответа, оно устанавливается администратором.");
$faq[] = array("Как я могу редактировать или удалить опрос?", "Также как и сообщения, опросы могут удалять только их создатели, модераторы или администраторы. Чтобы редактировать опрос, перейдите к редактированию первого сообщения в теме (оно всегда относится к опросу). Если никто не успел проголосовать, то пользователи могут редактировать или удалять опрос, но если уже кто-то проголосовал, то только модераторы или администраторы могут удалить его. Это сделано для того, чтобы нельзя было менять варианты ответов, в то время как люди уже проголосовали.");
$faq[] = array("Почему мне недоступны некоторые форумы?", "Некоторые форумы доступны только определённым пользователям или группам пользователей. Чтобы их просматривать, создавать сообщения и т.д., вам может потребоваться специальное разрешение. Только модераторы или администраторы форума могут предоставить такое разрешение, свяжитесь с ними.");
$faq[] = array("Почему я не могу голосовать в опросе?", "Только зарегистрированные пользователи могут участвовать в опросе (чтобы предотвратить подтасовку результатов анонимными пользователями). Если вы зарегистрированы, но не можете голосовать, то, скорее всего, у вас нет на это необходимых прав доступа.");


$faq[] = array("--","Форматирование сообщений и типы создаваемых тем");
$faq[] = array("Что такое BBCode?", "BBCode это особая реализация HTML, возможность использования BBCode определяется администратором (вы также можете отключить его в каждом создаваемом вами сообщении). BBCode очень похож на HTML, тэги в нём заключаются в квадратные скобки [ и ], а не &lt; и &gt;, он даёт пользователю больше возможностей в создании сообщений. За дополнительной информацией о BBCode смотрите руководство по BBCode, ссылка на которое доступна из формы отправки сообщений.");
$faq[] = array("Могу ли я использовать HTML?", "Зависит от того разрешено ли это администратором. Если разрешено его использовать, то, скорее всего, работать будут лишь несколько тэгов. Это сделано для <i>безопасности</i>, чтобы запретить использование тэгов которые могут вызвать проблемы. Если HTML включён, то вы сможете выключить его для конкретного сообщения при создании этого сообщения.");
$faq[] = array("Что такое смайлики?", "Смайлики, или эмотиконы — это маленькие картинки, которые могут быть использованы для выражения чувств, например :) значит радость, :( значит грусть. Полный список смайликов можно увидеть в форме создания сообщений. Только не перестарайтесь, используя их: они легко могут сделать сообщение нечитаемым, и модератор может отредактировать ваше сообщение, или вообще удалить его.");
$faq[] = array("Могу ли я вставлять картинки?", "Вы можете вставлять картинки в сообщения. Но пока нет возможности загружать картинки на форум. Вы должны указать ссылку на картинку, которая находится на общедоступном сервере, например: http://www.some-unknown-place.net/my-picture.gif. Вы не можете указать ни ссылку на свой компьютер (если, конечно, он не является общедоступным сервером), ни на картинки которые находятся за механизмом авторизации, например в почтовых ящиках mail.ru, на защищённых паролем сайтах  и т.д. Для отображения картинки в сообщении используйте тэг [img] BBCode или соответствующий тэг HTML (если это разрешено).");
$faq[] = array("Что такое «Объявление»?", "Объявление чаще всего содержит важную информацию, которую вы должны прочесть как можно скорее. Объявления всегда находится в самом верху форума в котором они было созданы. Возможность создания объявлений зависит от вашего уровня доступа, который определяется администратором.");
$faq[] = array("Что такое «Важная тема»?", "Важные темы находится ниже объявления на странице просмотра форума, и при этом только на первой странице. Обычно они тоже несут какую-то важную информацию, и вы должны прочесть их, как только у вас появится возможность. Так же как и при создании объявлений, вам потребуется необходимый уровень доступа.");
$faq[] = array("Что значит «Тема закрыта»?", "Темы могут быть закрыты только модераторами или администраторами. Вы не можете отвечать на закрытые темы, и любой опрос в закрытой теме автоматически прекращается. Темы закрываются по многим причинам...");


$faq[] = array("--","Уровни пользователей и группы");
$faq[] = array("Кто такие администраторы?", "Администраторы имеют высший уровень контроля над форумом. Эти люди могут контролировать все аспекты форума: назначение доступа, отключение пользователей, создание групп пользователей и назначение модераторов и т.д. Они также имеют полные модераторские права во всех форумах.");
$faq[] = array("Кто такие модераторы?", "Модераторы это пользователи (или группы пользователей) чья работа — ежедневно следить за форумами. У них есть возможность редактировать, удалять, закрывать и вновь открывать темы, перемещать и разделять темы в форумах, за которые они отвечают. Главные задачи модераторов: не допускать беспорядка в форумах, оскорблений, следить, чтобы сообщения соответствовали теме форума.");
$faq[] = array("Что такое группы пользователей?", "Администраторы могут объединять пользователей в группы. Каждый пользователь может состоять в нескольких группах, и каждой группе могут быть назначены индивидуальные права доступа. Это облегчает администраторам работу с назначением нескольких пользователей модераторами форума, или предоставлением доступа к приватным форумам и т.д.");
$faq[] = array("Как мне вступить в группу?", "Для того, чтобы вступить в группу, щёлкните по ссылке «Группы», которая, как правило, находится наверху (но это зависит от дизайна) и вы увидите список групп. Не все группы <i>общедоступны</i>, некоторый могут быть закрытыми, а некоторые могут быть скрытыми. Если группа общедоступна, то вы можете запросить членство в ней, щёлкнув по соответствующей кнопке. Модератор группы должен будет одобрить ваше участие в группе, он может спросить, зачем вы хотите присоединиться. Пожалуйста, не донимайте модератора группы, выясняя, почему ваш запрос был отклонён, у него могут быть свои причины.");
$faq[] = array("Как мне стать модератором группы?", "Группы пользователей создаются администраторами форума, они же и назначают модераторов групп. Если вы заинтересованы в создании группы, то свяжитесь с администратором, попробуйте отправить ему личное сообщение.");


$faq[] = array("--","Личные сообщения");
$faq[] = array("Я не могу отправить личное сообщение!", "Это может быть вызвано тремя причинами; вы не зарегистрированы и/или не вошли на форум, администратор запретил отправку личных сообщений на всем форуме или же администратор запретил лично вам отправлять личные сообщения. Если верно третье, то спросите у администратора, почему он это сделал.");
$faq[] = array("Я всё время получаю нежелательные личные сообщения!", "В будущем мы добавим возможность создания игнор-списка в службу личных сообщений, а пока, если вы продолжаете получать нежелательные письма от кого-либо, поставьте в известность администратора, он может вообще запретить этому пользователю отправку личных сообщений.");
$faq[] = array("Я получил спам или оскорбительный E-mail от кого-то с этого форума!", "Очень жаль это слышать. Форма отправки E-mail на данном форуме включает меры предосторожности и возможность отслеживания пользователей, отправляющих подобные сообщения. Вы должны написать E-mail администратору форума с полной копией полученного письма, при этом очень важно включить все заголовки (в них содержится детальная информация о пользователе, который отправил сообщение). Администратор сможет затем принять меры.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Информация о phpBB 2");
$faq[] = array("Кто написал этот форум?", "Это программное обеспечение (в его исходной форме) написано и распространяется <a href=\"http://www.phpbb.com/\" target=\"_blank\">Группой phpBB</a>, ей и принадлежат авторские права на него. Этот форум выпускается под лицензией GNU General Public Licence и может свободно распространяться, за дополнительной информацией смотрите ссылку вверху");
$faq[] = array("Почему здесь нет такой-то функции?", "Этот форум был написан Группой phpBB. Если вы уверены, что какая-то функция должна быть добавлена, посетите сайт phpbb.com и узнайте, что думает по этому поводу Группа phpBB. Пожалуйста, не пишите просьбы о включении каких либо функций на форум phpbb.com, Группа использует sourceforge чтобы работать над новыми функциями. Пожалуйста, сначала просмотрите форумы, чтобы выяснить, каково наше мнение по поводу данной функции (если такое мнение у нас есть) и только после этого следуйте процедуре, которая там будет описана.");
$faq[] = array("С кем можно связаться по вопросу некорректного использования и юридических вопросов, связанных с этим форумом?", "Вы должны связаться с администратором данного форума. Если вы не можете выяснить, кто является администратором, то сперва свяжитесь с модератором и спросите у него, с кем вы можете связаться по данному вопросу. Если и теперь вы не получили ответа, свяжитесь с владельцем домена (сделайте whois lookup) или, если форум запущен на бесплатном домене (например chat.ru, yahoo, free.fr, f2s.com, etc.), с техподдержкой данного домена. Пожалуйста, учтите, что Группа phpBB не имеет никакого контроля над данным форумом, и не может нести никакой ответственности за то кем и как данный форум используется. Абсолютно бессмысленно обращаться к Группе phpBB по юридическим вопросам (по приостановке форума, ответственности за него и т.д.), которые не относятся напрямую к вебсайту phpbb.com, или которые частично относятся к программному обеспечению phpBB группы. Если же вы все-таки пошлёте E-mail Группе phpBB об использовании третьей стороной данного форума, то не ждите подробного письма, или вы можете вообще не получить ответа.");

//
// This ends the FAQ entries
//

?>