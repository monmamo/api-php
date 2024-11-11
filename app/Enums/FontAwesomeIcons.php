<?php

namespace App\Enums;

use App\Html\Elements\FontAwesomeIcon;
use App\Methods\Make\MakeForEnum;
use Illuminate\Support\Str;

/**
 * ‼️ Since this is an enum, we cannot create multiple enums for the same slug. The general solution for creating icons is to create them as components in the resources/views/components/icons directory.
 *
 * Notes:
 * [S] Section.
 */
enum FontAwesomeIcons: string
{
    use MakeForEnum;

    case Active = 'play';
    case AmericanExpress = 'cc-amex';
    case Bug = 'bug';
    case Closed = 'stop';
    case Download = 'download';
    case Edit = 'pencil';
    case EmailAddress = 'at';
    case Exam = 'file-pen';
    case GoodStanding = 'check';
    case Home = 'house';
    case Inactive = 'pause';
    case InfiniteRecursion = 'infinity';
    case LmsUser = 'user-tie';
    case Mastercard = 'cc-mastercard';
    case Minimize = 'minus';
    case Note = 'note';
    case PhoneNumber = 'phone';
    case QuestionCircle = 'question-circle';
    case Remove = 'times';
    case Revoked = 'ban';
    case Transaction = 'money-bill';
    case User = 'user'; // particularly LMS user
    case UserSignIn = 'right-to-bracket';
    case UserSignOut = 'right-from-bracket';
    case View = 'eye';
    case Visa = 'cc-visa';
    case Warning = 'triangle-exclamation';

    /**
     * @group binary
     *
     * @param null|mixed $title
     *
     * @uses \App\Html\Elements\FontAwesomeIcon::brand
     * @uses \App\Html\Elements\FontAwesomeIcon::regular
     * @uses \App\Html\Elements\FontAwesomeIcon::solid
     * @uses \App\Html\Elements\FontAwesomeIcon::setTitle
     * @uses \Illuminate\Support\Str::headline (Laravel) Converts the given string to title case for each word. ‼️ Injects a space before each uppercase character.
     */
    private function _make(string $type, $title = null): FontAwesomeIcon
    {
        return FontAwesomeIcon::$type($this->value)
            ->setTitle($title ?? Str::headline($this->name));
    }

    /**
     * @group unary
     *
     * @param null|mixed $title
     *
     * @uses \App\Enums\FontAwesomeIcons::_make
     */
    public function brand($title = null): FontAwesomeIcon
    {
        return $this->_make(type: 'brand', title: $title);
    }

    /**
     * @group unary
     *
     * @param null|mixed $title
     *
     * @uses \App\Enums\FontAwesomeIcons::_make
     */
    public function regular($title = null): FontAwesomeIcon
    {
        return $this->_make(type: 'regular', title: $title);
    }

    /**
     * @group unary
     *
     * @param null|mixed $title
     *
     * @uses \App\Enums\FontAwesomeIcons::_make
     */
    public function solid($title = null): FontAwesomeIcon
    {
        return $this->_make(type: 'solid', title: $title);
    }
}
