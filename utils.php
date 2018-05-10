<?
function read_tsv_file($filename)
{
    $handle = fopen($filename, 'r');
    while ($row = fgetcsv($handle, 0, "\t")) {
        if (!isset($headers)) {
            $headers = $row;
            continue;
        }
        $data[] = array_combine($headers, $row);
    }
    fclose($handle);
    return $data;
}
