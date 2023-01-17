<?php
class StringMutator{
  public static function bold(string $word): string {
    return sprintf('<b>%s</b>', $word);
  }
  public static function italic(string $word): string {
    return sprintf('<i>%s</i>', $word);
  }
  public static function boldItalic(string $word): string {
    return self::italic(self::bold($word));
  }
}
class ChildStringMutator extends StringMutator {
  public static function bold(string $word): string {
    return '<b>STATIC LATE BINDINGS</b>';
  }
}
echo ChildStringMutator::boldItalic('Muhamad Surya Iksanudin');
echo PHP_EOL;
