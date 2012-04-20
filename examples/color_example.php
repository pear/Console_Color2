<?php
/**
 * Console_Color2 example file
 *
 * PHP version 5
 *
 * Copyright (c) 2007 Stefan Walk
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @category Console
 * @package  Console_Color2
 * @author   Stefan Walk <et@php.net>
 * @author   Johannes Skov Frandsen <localgod@heaven.dk>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT License
 * @link     http://pear.php.net/package/Console_Color2
 */

require_once 'Console/Color2.php';

// Let's add a little color to the world
// %n resets the color so the following stuff doesn't get messed up
print Console_Color2::convert("%bHello World!%n\n");
// Colorless mode, in case you need to strip colorcodes off a text
print Console_Color2::convert("%rHello World!%n\n", false);
// The uppercase version makes a colorcode bold/bright
print Console_Color2::convert("%BHello World!%n\n");
// To print a %, you use %%
print Console_Color2::convert("3 out of 4 people make up about %r75%% %nof the "."world population.\n");
// Or you can use the escape() method.
print Console_Color2::convert("%y".Console_Color2::escape('If you feel that you do everying wrong, be random'.', there\'s a 50% Chance of making the right '.'decision.')."%n\n");