<?php

namespace App\Model\Interfaces;

interface FriendInterface
{
//    public function getIdListByUserId(int $userId);

    public function getInfoByUserId(int $userId): array;
}