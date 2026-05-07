<?php
/*
* File:     MessageCollection.php
* Category: Collection
* Author:   M. Goldenbaum
* Created:  16.03.18 03:13
* Updated:  -
*
* Description:
*  -
*/

namespace App\Email\Support;

use Illuminate\Support\Collection;
use App\Email\Message;

/**
 * Class MessageCollection
 *
 * @package Email\Support
 * @implements Collection<int, Message>
 */
class MessageCollection extends PaginatedCollection {

}
