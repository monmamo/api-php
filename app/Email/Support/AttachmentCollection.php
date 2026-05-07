<?php
/*
* File:     AttachmentCollection.php
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
use App\Email\Attachment;

/**
 * Class AttachmentCollection
 *
 * @package Email\Support
 * @implements Collection<int, Attachment>
 */
class AttachmentCollection extends PaginatedCollection {

}