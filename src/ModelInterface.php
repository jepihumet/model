<?php

namespace Jepi\Model;

/**
 * ModelInterface.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */
interface ModelInterface
{
    public function __construct(Connections $connections);
    public function select($query);
    public function insert($query);
    public function update($query);
    public function delete($query);
    public function beginTransaction();
    public function endTransaction();
    public function rollback();
}