<?php

namespace App\Services;

use Exception;

class PasswordService
{
    /**
     * @throws Exception
     */
    public function generate(int $length, bool $useNumbers, bool $useUppercase, bool $useLowercase): ?string
    {
        if (!$useNumbers && !$useUppercase && !$useLowercase) {
            return null;
        }

        $characterGroups = [];
        if ($useNumbers) {
            $characterGroups []= '23456789';
        }
        if ($useUppercase) {
            $characterGroups []= 'ABCDEFGHJKLMNPQRSTUVWXYZ';
        }
        if ($useLowercase) {
            $characterGroups []= 'abcdefghijkmnpqrstuvwxyz';
        }

        $groupKeys = array_keys($characterGroups);
        $keyString = $this->randomizeKeys($length, $groupKeys);

        $password = '';
        $prevCharacter = '';
        foreach (str_split($keyString) as $key) {
            $group = $characterGroups[$key];
            $max = strlen($group) - 1;

            $isUniqueCharacter = false;
            $newCharacter = '';
            while (!$isUniqueCharacter) {
                $newCharacter = $group[random_int(0, $max)];

                if ($newCharacter != $prevCharacter) {
                    $prevCharacter = $newCharacter;
                    $isUniqueCharacter = true;
                }
            }

            $password .= $newCharacter;
        }

        return $password;
    }

    /**
     * @throws Exception
     */
    private function randomizeKeys(int $length, array $groupKeys): ?string
    {
        $max = count($groupKeys) - 1;
        $allGroupsHere = false;
        $result = '';
        while (!$allGroupsHere) {
            $result = '';
            for ($i = 0; $i < $length; $i++) {
                $result .= $groupKeys[random_int(0, $max)];
            }

            $allGroupsHere = true;
            foreach ($groupKeys as $key) {
                if (!str_contains($result, $key)) {
                    $allGroupsHere = false;
                }
            }
        }

        return $result;
    }
}
