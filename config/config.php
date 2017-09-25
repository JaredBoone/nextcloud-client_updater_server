<?php
/**
 * @copyright Copyright (c) 2016 Lukas Reschke <lukas@statuscode.ch>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

declare(strict_types=1);

/**
 * Associiative array of OEM => OS => version
 */
return [
    'SHIPdrive' => [
        'win32' => [
            'version' => '2.3.3.1',
            'versionstring' => 'SHIPdrive Client 2.3.3 (build 1)',  
            'downloadUrl' => 'https://drive.ship.scea.com/desktop/releases/Windows/SHIPdrive-2.3.3.1-setup.exe',
            'web' => 'https://c5.ship.scea.com/confluence/display/HELP/SHIPdrive+Desktop+Clients',
        ],
        'macos' => [
            'version' => '2.3.3.1',
            'versionstring' => 'SHIPdrive Client 2.3.3 (build 1)',
            'downloadUrl' => 'https://drive.ship.scea.com/desktop/releases/Mac/Updates/SHIPdrive-2.3.3.1.pkg.tbz',
            'signature' => 'MC4CFQC99PpNxHbOqxUU00Z6cEAemIH8jAIVAKdVhoB34kOljpdZJ8ksfV0JpVta',
        ],
    ],
];
