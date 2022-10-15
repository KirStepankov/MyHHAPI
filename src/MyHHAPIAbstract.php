<?php

namespace MyHHAPI;

use Exception;

abstract class MyHHAPIAbstract
{
    public function setRequiredFields(array $fields): MyHHAPIAbstract|Exception
    {
        try {
            $this->checkRequiredFields($fields);

            foreach ($fields as $prop => $value) {
                $this->{"$prop"} = $value;
            }

            return $this;
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * @throws Exception
     */
    private function checkRequiredFields($fields): void
    {
        foreach ($this->requiredFields as $rField) {
            if (!isset($fields[$rField])) {
                throw new Exception('Не заполнены обязательные поля');
            }
        }
    }
}