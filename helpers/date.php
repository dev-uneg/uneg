<?php
declare(strict_types=1);

function format_mx_datetime(string $value): string
{
    if ($value === '') {
        return '';
    }

    try {
        $dt = new DateTimeImmutable($value);
        $dt = $dt->setTimezone(new DateTimeZone('America/Mexico_City'));
        return $dt->format('d/m/Y H:i');
    } catch (Throwable $e) {
        return $value;
    }
}
