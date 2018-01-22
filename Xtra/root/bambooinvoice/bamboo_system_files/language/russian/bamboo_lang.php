<?php 
/*
|--------------------------------------------------------------------------
| Russian translation by Nick Kugaevsky
|--------------------------------------------------------------------------
|
| Feel free to contact me if you find any mistakes on nick@kugaevsky.ru
| http://kugaevsky.ru/
|
*/

if (!defined('BASEPATH')) exit('No direct script access allowed');

$lang['accounts_change_password'] = 'Сменить пароль';
$lang['accounts_admin_account_create_success'] = 'Аккаунт администратора успешно создан';
$lang['accounts_admin_account_create_fail'] = 'Ошибка создания аккаунта администратора';
$lang['accounts_admin_account_delete_success'] = 'Аккаунт администратора успешно удален';
$lang['accounts_admin_account_delete_fail'] = 'Ошибка удаления аккаунта администратора';
$lang['accounts_admin_account_edit'] = 'Изменить аккаунт';
$lang['accounts_admin_account_edit_success'] = 'Аккаунт успешно изменен';
$lang['accounts_admin_account_edit_fail'] = 'Ошибка изменения аккаунта';
$lang['accounts_admin_account'] = 'Аккаунт администратора';
$lang['accounts_admin_account_primary'] = 'Основной аккаунт администратора';
$lang['accounts_admin_account_delete_fail'] = 'Ошибка удаления аккаунта администратора';

$lang['actions_cancel'] = 'Отменить';
$lang['actions_change'] = 'Изменить';
$lang['actions_create_invoice'] = 'Создать счет';
$lang['actions_donate'] = 'Поддержать';
$lang['actions_delete'] = 'Удалить';
$lang['actions_edit'] = 'Редактировать';
$lang['actions_required_fields'] = 'Обязательные поля';
$lang['actions_select_below'] = 'выберите';

$lang['bambooinvoice_logo'] = '<span class=\'bamboo_invoice_bam\'>Bamboo</span><span class=\'bamboo_invoice_inv\'>Invoice</span>';
$lang['bambooinvoice_version'] = 'Версия';

$lang['clients_add_contact'] = 'Добавить контакт';
$lang['clients_address1'] = 'Адрес 1';
$lang['clients_address2'] = 'Адрес 2';
$lang['clients_assigned_to_them'] = '. К клиенту привязаны счета. Вы собираетесь удалить клиента <strong class="error">без возможности восстановления</strong>, также будут  <strong class="error">удалены все связанные с ним счета</strong>. Вы уверены, что хотите сделать это?';
$lang['clients_cancel_add_contact'] = 'Отменить добавление контакта';
$lang['clients_city'] = 'Город';
$lang['clients_client_has'] = 'Всего счетов у клиента: ';
$lang['clients_clients_registered'] = '.';
$lang['clients_contact_add'] = 'Невозжможно добавить контакт. Обратите внимание, что поля Имя, Фамилия и e-mail должны быть заданы корректно.';
$lang['clients_contact_delete_fail'] = 'Невозможно удалить контакт.';
$lang['clients_contacts'] = 'Контакты';
$lang['clients_country'] = 'Страна';
$lang['clients_create_new_client'] = 'Добавить клиента';
$lang['clients_created'] = 'Клиент добавлен';
$lang['clients_delete_all_invoices'] = 'Удалить клиента и все его счета';
$lang['clients_delete_client'] = 'Удалить';
$lang['clients_delete_contact'] = 'Удалить контакт';
$lang['clients_deleted'] = 'Клиент успешно удален';
$lang['clients_deleted_error'] = 'Клиент не может быть удален'; 
$lang['clients_edit_client'] = 'Изменить';
$lang['clients_edit_contact'] = 'Редактировать контакт';
$lang['clients_edited'] = 'Данные клиента успешно обновлены';
$lang['clients_edited_contact_info'] = 'Информация о контакте успешно обновлена';
$lang['clients_email'] = 'e-mail';
$lang['clients_first_name'] = 'Имя';
$lang['clients_id'] = 'ID клиента';
$lang['clients_last_name'] = 'Фамилия';
$lang['clients_name'] = 'Имя клиента';
$lang['clients_new_contact_fail'] = 'Невозжможно добавить контакт. Обратите внимание, что поля Имя, Фамилия и e-mail должны быть заданы корректно.';
$lang['clients_no_invoice_listed'] = 'Нет контактов для клиента ';
$lang['clients_notes'] = 'Заметки';
$lang['clients_phone'] = 'Телефон';
$lang['clients_postal'] = 'Почтовый индекс';
$lang['clients_province'] = 'Область/регион';
$lang['clients_save_client'] = 'Сохранить';
$lang['clients_title'] = 'Название';
$lang['clients_to'] = ' ';
$lang['clients_update_client'] = 'Сохранить';
$lang['clients_website'] = 'Сайт';
$lang['clients_you_have'] = 'Клиентов зарегистрировано: ';

$lang['error_date_fill'] = 'Произошла ошибка. Обратите внимание, что дата должна быть в формате ГГГГ-ММ-ДД и сумма должна быть числом. Пожалуйста, вренитесь и попробуйте еще раз.';
$lang['error_date_format'] = 'Дата должна быть в формате ГГГГ-ММ-ДД';
$lang['error_email_recipients'] = 'Пожалуйста, выберите хотя бы одного получателя счета';
$lang['error_field_required'] = 'Это поле обязательно для заполнения';
$lang['error_login_password'] = 'Введите пароль';
$lang['error_login_username'] = 'Введите имя пользователя';
$lang['error_problem_editing'] = 'Невозможно отредактировать счет. Сообщите об ошибке invoice_controller_edit';
$lang['error_problem_inserting'] = 'Ошибка вставки';
$lang['error_problem_saving'] = 'Невозможно сохранить счет для отправки.';
$lang['error_selection'] = 'В выборку не попало ни одного счета.';

$lang['install_explain'] = 'Ваш e-mail будет использоваться в качестве логина, а также для посылки счетов, восстановления пароля и других действий, связанных с посылкой почты. Имя будет использовано для заполнения поля «От:» в исходящей корреспонденции.';
$lang['install_install'] = 'Установить';
$lang['install_welcome'] = 'Добро пожаловать '.$lang['bambooinvoice_logo'].'. Для корректной установки мне понадобится кое-какая информация.';

$lang['invoice_add_note'] = 'Добавить заметку';
$lang['invoice_all_clients'] = 'Все клиенты';
$lang['invoice_all_invoices'] = 'Все счета';
$lang['invoice_amount'] = 'Сумма';
$lang['invoice_amount_item'] = 'Сумма';
$lang['invoice_amount_error'] = 'Пожалуйста, введите сумму';
$lang['invoice_amount_numbers_only'] = 'Только цифры';
$lang['invoice_amount_paid'] = 'Оплаченная сумма';
$lang['invoice_amount_outstanding'] = 'Оставшаяся сумма';
$lang['invoice_bill_to'] = 'Bill to';
$lang['invoice_client'] = 'Клиент';
$lang['invoice_client_id'] = 'ID клиента';
$lang['invoice_closed'] = 'Закрыт';
$lang['invoice_comment'] = 'Заметка';
$lang['invoice_comment_success'] = 'Заметка добавлена.';
$lang['invoice_contact_add'] = 'Нет контактов для отправки счета. Добавьте, пожалуйста';
$lang['invoice_details'] = 'Данные счета';
$lang['invoice_date_issued'] = 'Дата создания';
$lang['invoice_date_issued_full'] = 'Дата создания (в формате ГГГГ-ММ-ДД)';
$lang['invoice_date_paid_full'] = 'Дата оплаты (в формате ГГГГ-ММ-ДД)';
$lang['invoice_email_demo'] = 'Для снижения нагрузки на демо e-mail не был послан. Чтобы увидеть копию PDF вложения выберите «Создать счет» из меню.';
$lang['invoice_email_invoice_to'] = 'Отправить счет';
$lang['invoice_email_message'] = 'Отправить сообщение';
$lang['invoice_email_no_recipient'] = 'Пожалуйста, вернитесь и выберите адресата счета.';
$lang['invoice_email_success'] = 'Счет отправлен. Данные сохранены в истории счета.';
$lang['invoice_export_to'] = 'Экспорт данных счета';
$lang['invoice_generated_by'] = 'Счет сформирован';
$lang['invoice_history_comments'] = 'История счета и личные заметки';
$lang['invoice_invoice'] = 'Счет';
$lang['invoice_blind_copy_me'] = 'отправить копию на мой e-mail';
$lang['invoice_invoice_delete_success'] = 'Счет удален';
$lang['invoice_invoice_edit_success'] = 'Счет изменен';
$lang['invoice_is_tax_exempt'] = 'is tax exempt';
$lang['invoice_item'] = 'Item';
$lang['invoice_last_used'] = 'последний счет имеет номер ';
$lang['invoice_new_item'] = 'Добавить';
$lang['invoice_new_invoice'] = 'Новый счет';
$lang['invoice_new_invoice_error'] = 'Ошибка создания счета';
$lang['invoice_new_invoice_to'] = 'New invoice to';
$lang['invoice_no_payments_entered'] = 'Платежей по этому счету не было. Чтобы создать платеж выберите пункт меню «Внести платеж».';
$lang['invoice_not_sent'] = 'Счет не был отправлен клиенты. Чтобы послать счет выберите пункт меню «Отправить счет».';
$lang['invoice_not_taxable'] = 'Без НДС';
$lang['invoice_not_unique'] = 'Номер счета не уникален';
$lang['invoice_note'] = 'Комментарий';
$lang['invoice_note_max_chars'] = '(максимум 255 символов)';
$lang['invoice_no_invoice_match'] = 'Нет подходящих под условия счетов';
$lang['invoice_number'] = 'Номер счета';
$lang['invoice_open'] = 'Открыт';
$lang['invoice_or'] = 'или';
$lang['invoice_or_new_client'] = 'или добавьте нового';
$lang['invoice_overdue'] = 'Просрочен';
$lang['invoice_overdue_invoices'] = ' ';
$lang['invoice_payment_enter'] = 'Внести платеж';
$lang['invoice_payment_history'] = 'История платежей';
$lang['invoice_payment_note_blank'] = 'Отсутствует текст заметки';
$lang['invoice_payment_success'] = 'Платеж по счету успешно внесен.';
$lang['invoice_payment_term'] = 'Срок оплаты';
$lang['invoice_premenently_delete'] = 'Вы собираетесь <strong class="error">удалить</strong> счет номер';
$lang['invoice_problem_creating'] = 'Невозможно создать счет.';
$lang['invoice_problem_editing'] = 'Ошибка изменения счета';
$lang['invoice_quantity'] = 'Количество';
$lang['invoice_return_invoice_view'] = 'вернуться к счету';
$lang['invoice_save_edited_invoice'] = 'Сохранить счет';
$lang['invoice_select_client'] = 'Выберите клиента';
$lang['invoice_send_to'] = 'Послать счет';
$lang['invoice_sent_to'] = 'Счет послан';
$lang['invoice_status'] = 'Статус';
$lang['invoice_summary'] = 'Всего';
$lang['invoice_sure_delete'] = 'Вы точно хотите это сделать?';
$lang['invoice_use_tax_by_default'] = 'Налог по умолчанию';
$lang['invoice_tax_name'] = 'Название налога';
$lang['invoice_tax_rate'] = 'Размер налога';
$lang['invoice_tax2_description'] = 'Название доп. налога';
$lang['invoice_tax2_rate'] = 'Размер доп. налога';
$lang['invoice_tax_exempt'] = 'NB: этот клиент освобожден от уплаты налогов';
$lang['invoice_tax_status'] = 'Налогообложение';
$lang['invoice_taxable'] = 'Облагается налогом';
$lang['invoice_taxes'] = 'Налоги';
$lang['invoice_there_are_currently'] = 'Всего просроченных счетов:';
$lang['invoice_total'] = 'Итого';
$lang['invoice_work_description'] = 'Описание услуги';
$lang['invoice_you_may_now'] = 'You may now';
$lang['invoice_you'] = 'Вы';

$lang['login_allow_login'] = 'Добавить аккаунт администратора';
$lang['login_caps_lock'] = 'Проверьте не нажата ли клавиша <em>Caps Lock</em>';
$lang['login_forgot_password'] = 'Забытый пароль';
$lang['login_login'] = 'Войти';
$lang['login_logout'] = 'Выйти';
$lang['login_logout_confirm'] = 'Точно выйти?';
$lang['login_logout_success1'] = "Вы успешно вышли. Можете же, когда хотите.";
$lang['login_logout_success2'] = 'войти снова';
$lang['login_password'] = 'Пароль';
$lang['login_password_confirm'] = 'Подтверждение парлоя';
$lang['login_password_email'] = "can email your password to the email address you were registered with. If you've forgotten it and want to have it reset, simply fill out the form below.";
$lang['login_password_email1'] = 'Вы успешно сменили пароль. Новый пароль:';
$lang['login_password_email2'] = 'and can now be used to';
$lang['login_password_fail'] = "Что-то пошло не так. Я знаю, что текст ошибки о многом не говорит, но кто сказал, что будет легко.";
$lang['login_password_reset_demo'] = 'Функция отключена в демо-версии, но вообще вы должны получить письмо с информацией о сбросе пароля.';
$lang['login_password_reset_disabled'] = 'Сброс пароля выключен в демо-версии.';
$lang['login_password_reset_email1'] = 'Кто-то (возможно, вы) запросил сброс пароля для своего аккаунта в BambooInvoice.';
$lang['login_password_reset_email2'] = 'Чтобы сбросить его пройдите по ссылке:';
$lang['login_password_reset_email3'] = "Если вы не посылали подобных запросов, просто не обращайте внимания на это письмо и извините за то, что отвлекли вас от важных дел.";
$lang['login_password_reset_title'] = 'BambooInvoice: сброс пароля';
$lang['login_password_reset_unable'] = 'Невозможно сбросить пароль. Попробуйте снова.';
$lang['login_password_sent'] = 'Подверждение для смены пароля было выслано на адрес';
$lang['login_password_submit'] = 'Выслать пароль';
$lang['login_password_success'] = 'Ваш пароль был успешно изменен и выслан на почту.';
$lang['login_remember_me'] = 'Запомнить меня';
$lang['login_username'] = 'e-mail';
$lang['login_wrong_password'] = 'Извините, логин и/или пароль не существуют. Попробуйте еще раз.';

$lang['menu_accounts'] = 'Аккаунты';
$lang['menu_bugs'] = 'Bugs';
$lang['menu_catchphrase'] = 'Simple,<br />Beautiful,<br />Open Source,<br />Online Invoicing';
$lang['menu_catchphrase_nobreak'] = 'Simple, Beautiful, Open Source, Online Invoicing';
$lang['menu_changelog'] = 'Change Log';
$lang['menu_clients'] = 'Клиенты';
$lang['menu_credits'] = 'Создатели';
$lang['menu_delete_invoice'] = 'Удалить счет';
$lang['menu_duplicate_invoice'] = 'Копировать счет';
$lang['menu_did_you_know'] = 'А вы знали?';
$lang['menu_edit_invoice'] = 'Изменить счет';
$lang['menu_email_invoice'] = 'Отправить счет';
$lang['menu_enter_payment'] = 'Внести платеж';
$lang['menu_faq'] = 'Часто задаваемые вопросы';
$lang['menu_generate_pdf'] = 'Создать PDF';
$lang['menu_help'] = 'Помощь';
$lang['menu_invoice_summary'] = 'Список счетов';
$lang['menu_private_note'] = 'Личная заметка';
$lang['menu_invoices'] = 'Счета';
$lang['menu_logout'] = 'Выйти';
$lang['menu_new_invoice'] = 'Новый счет';
$lang['menu_print_invoice'] = 'Печать счета';
$lang['menu_reports'] = 'Отчеты';
$lang['menu_roadmap'] = 'Roadmap';
$lang['menu_root_system'] = 'Главная';
$lang['menu_see_also'] = 'Смотрите также';
$lang['menu_settings'] = 'Настройки';
$lang['menu_welcome'] = 'Добро пожаловать';
$lang['menu_utilities'] = 'Утилиты';

$lang['notice_english_only'] = '';
$lang['notice_generated_by'] = 'Сформирован';

$lang['reports_back_to_reports'] = 'вернутся к отчетам';
$lang['reports_collected'] = 'collected';
$lang['reports_end_date'] = 'Конец периода (гггг-мм-дд)';
$lang['reports_first_quarter'] = 'первый квартал';
$lang['reports_fourth_quarter'] = 'четвертый квартал';
$lang['reports_generate_report'] = 'Создать отчет';
$lang['reports_invoices_issued_year'] = ' — всего счетов за год';
$lang['reports_legend'] = 'Легенда';
$lang['reports_second_quarter'] = 'второй квартал';
$lang['reports_start_date'] = 'Начало периода (гггг-мм-дд)';
$lang['reports_third_quarter'] = 'третий квартал';
$lang['reports_year_to_date'] = 'Год';
$lang['reports_no_data'] = 'Нет данных за указанный период.';
$lang['reports_yearly_income'] = 'Прибыль за год';

$lang['settings_account_settings'] = 'Настройки аккаунта';
$lang['settings_invoice_settings'] = 'Настройки счета';
$lang['settings_advanced_settings'] = 'Дополнительно';

$lang['settings_company_name'] = 'Название компании';
$lang['settings_currency_symbol'] = 'Символ валюты';
$lang['settings_currency_type'] = 'Тип валюты';
$lang['settings_days_payment_due'] = 'Дней до погашения счета';
$lang['settings_default_note'] = 'Заметка для счета по умолчанию';
$lang['settings_display_branding'] = 'Отображать лого BambooInvoice';
$lang['settings_logo'] = 'Логотип';
$lang['settings_modify_fail'] = 'Возникла проблема при изменении настроек. Увы.';
$lang['settings_modify_success'] = 'Настройки успешно изменены.';
$lang['settings_note_max_chars'] = '(максимум 255 символов)';
$lang['settings_primary_contact'] = 'Основной контакт';
$lang['settings_primary_email'] = 'Основной e-mail';
$lang['settings_primary_email_message'] = 'Изменение e-mail повлечет за собой также изменение логина для входа в систему.';
$lang['settings_save_settings'] = 'Сохранить настройки';
$lang['settings_save_invoices'] = 'Сохранять счета';
$lang['settings_save_invoices_warning'] = '<strong>Внимание:</strong> Отключение данной функции повлечет удаление всех сохраненных счетов.';
$lang['settings_settings_default'] = 'Эти настройки по умолчанию';
$lang['settings_short_language'] = 'en';
$lang['settings_tax_settings'] = 'Настройки налогов'; // to be translated
$lang['settings_tax_code'] = 'Номер или код валюты';
$lang['settings_will_use'] = 'будет использовать для создания счетов и клиентов.';

$lang['utilities_download_backup'] = 'Скачать резервную копию';
$lang['utilities_automatic_version_check'] = 'Проверять на новые версии';
$lang['utilities_phpinfo'] = 'Информация о PHP';
$lang['feature_not_available'] = 'Функция отсутствует в демо-версии.';
$lang['utilities_new_version_available'] = "Доступна новая версия BambooInvoice. "; // space after period
$lang['utilities_up_to_date'] = "Вы используете последнюю версию BambooInvoice.";
$lang['utilities_connection_failed'] = "Невозможно установить соединение с http://bambooinvoice.org .";
$lang['utilities_version_check'] = "Проверка новой версии";
$lang['utilities_version_undetermined'] = "Статус версии не может быть определен.";

$lang['menu_did_you_know_quotes'] = array(
					"У BambooINVOICE есть форум по адресу forums.bambooinvoice.org Обращайтесь с пожеланиями, за поддержкой, да и просто говорить.",
					"BambooINVOICE распространяется по лицензии GPL.",
					"Настройки всегда можно изменить в меню «Настройки». Логично не правда ли.",
					"Файл помощи устаревает с каждым дне. Добро пожаловать на BambooINVOICE.org за последней версией!",
					"Нового клиента можно создать из меню «Клиенты» или непосредственно в процессе выставления счета!",
					"Стебель бамбука достигает своей максимальной высоты всего лишь за год!",
					"Срок жизни бамбука сделал его символом долгой жизни в Китае и дружбы в Индии!"
					);
?>