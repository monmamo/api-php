<?php
/*
* File:     FolderCollection.php
* Category: Collection
* Author:   M. Goldenbaum
* Created:  18.03.18 02:21
* Updated:  -
*
* Description:
*  -
*/

namespace App\Email\Support;

use Illuminate\Support\Collection;
use App\Email\Folder;

/**
 * Class FolderCollection
 *
 * @package Email\Support
 * @implements Collection<int, Folder>
 */
class FolderCollection extends PaginatedCollection {

}