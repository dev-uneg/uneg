<?php
declare(strict_types=1);

/**
 * Helper de formato de fecha/hora para vistas administrativas.
 *
 * Convierte valores de fecha (normalmente guardados en UTC o como texto ISO)
 * a horario de Ciudad de Mexico y los retorna en formato legible dd/mm/YYYY HH:mm.
 * Si el valor no se puede parsear, devuelve el original para no romper la vista.
 */
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
