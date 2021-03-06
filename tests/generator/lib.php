<?php
/**
 * This file is part of Totara LMS
 *
 * Copyright (C) 2017 onwards Totara Learning Solutions LTD
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Andrew McGhie <andrew.mcghie@totaralearning.com>
 * @package block_featured_links
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Totara featured links block generator class.
 */
class block_featured_links_generator extends testing_block_generator {

    /**
     * Creates a new default tile.
     *
     * @param int $blockinstanceid
     * @return \block_featured_links\tile\default_tile
     */
    public function create_default_tile($blockinstanceid) {
        $tile = \block_featured_links\tile\default_tile::add($blockinstanceid);
        return $tile;
    }

    /**
     * Creates a new course tile
     * @param int $blockinstanceid
     * @return \block_featured_links\tile\course_tile
     */
    public function create_course_tile($blockinstanceid) {
        $tile = \block_featured_links\tile\course_tile::add($blockinstanceid);
        return $tile;
    }

    /**
     * Created a new multi image
     * @param int $blockinstanceid
     * @return \block_featured_links\tile\gallery_tile
     */
    public function create_gallery_tile($blockinstanceid) {
        $tile = \block_featured_links\tile\gallery_tile::add($blockinstanceid);
        return $tile;
    }

    /**
     * @param int $blockinstanceid
     * @param string $type
     * @return \block_featured_links\tile\base
     */
    public function create_tile($blockinstanceid, $type) {
        $tile = $type::add($blockinstanceid);
        return $tile;
    }
}