<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Config;

enum Packages: string
{
    case AWS = 'phpgenesis/aws';
    case Common = 'phpgenesis/common';
    case CLI = 'phpgenesis/cli';
    case Logger = 'phpgenesis/logger';
    case PHPGenesis = 'phpgenesis/phpgenesis';
}