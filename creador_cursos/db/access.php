<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin capabilities are defined here.
 *
 * @package     block_creador_cursos
 * @category    access
 * @copyright   2024 Your Name <you@example.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 defined('MOODLE_INTERNAL') || die();
 
 $capabilities = [
 
     // Capacidad para agregar una instancia del bloque en el contexto del sistema.
     'block/creador_cursos:myaddinstance' => [
         'captype' => 'write',
         'contextlevel' => CONTEXT_SYSTEM,
         'archetypes' => [
             'manager' => CAP_ALLOW,
             'editingteacher' => CAP_ALLOW, // Permitir a los profesores editores agregar instancias del bloque
             'teacher' => CAP_ALLOW,        // Permitir a los profesores agregar instancias del bloque
             'student' => CAP_PROHIBIT,
         ],
         'clonepermissionsfrom' => 'moodle/my:manageblocks',
     ],
 
     // Capacidad para agregar una instancia del bloque en un contexto de bloque específico.
     'block/creador_cursos:addinstance' => [
         'captype' => 'write',
         'contextlevel' => CONTEXT_BLOCK,
         'archetypes' => [
             'manager' => CAP_ALLOW,
             'editingteacher' => CAP_ALLOW, // Permitir a los profesores editores agregar instancias del bloque
             'teacher' => CAP_ALLOW,        // Permitir a los profesores agregar instancias del bloque
             'student' => CAP_PROHIBIT,
         ],
         'clonepermissionsfrom' => 'moodle/site:manageblocks',
     ],
 
     // Capacidad para ver el bloque.
     'block/creador_cursos:view' => [
         'captype' => 'read',
         'contextlevel' => CONTEXT_BLOCK,
         'archetypes' => [
             'manager' => CAP_ALLOW,
             'editingteacher' => CAP_ALLOW, // Permitir a los profesores editores ver el bloque
             'teacher' => CAP_ALLOW,        // Permitir a los profesores ver el bloque
             'student' => CAP_PROHIBIT,
         ],
         
     ],
 ];
 
