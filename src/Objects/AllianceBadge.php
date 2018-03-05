<?php
/**************************************************************************************************************************************************************************************************************************************************************
 *                                                                                                                                                                                                                                                            *
 * Copyright (c) 2018 by Firegore (https://firegore.es) (git:firegore2).                                                                                                                                                                                      *
 * This file is part of clash-royale-php.                                                                                                                                                                                                                     *
 *                                                                                                                                                                                                                                                            *
 * clash-royale-php is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version. *
 * clash-royale-php is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                                                                    *
 * See the GNU Affero General Public License for more details.                                                                                                                                                                                                *
 * You should have received a copy of the GNU General Public License along with clash-royale-php.                                                                                                                                                             *
 * If not, see <http://www.gnu.org/licenses/>.                                                                                                                                                                                                                *
 *                                                                                                                                                                                                                                                            *
 **************************************************************************************************************************************************************************************************************************************************************/

namespace CR\Objects;

/**
 * AlianceBadge object
 *
 *
 * @method    string              getName()               Returns the name of the badge
 * @method    string              getCategory()           Returns the category name of the badge
 * @method    int                 getId()                 Returns the id of the badge
 * @method    string              getImage()              Returns the image url of the badge
 */

class AllianceBadge extends BaseObject
{

  /**
  * {@inheritdoc}
  */
  public function primaryKey()
  {
      return "";
  }

  /**
  * {@inheritdoc}
  */
  public function relations()
  {
    return [];
  }
}
