<?php

function getHtmlTable($students)
{
    $tableHtml = '<table border="1">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </tr>
    </thead>
    <tbody>';

    foreach ($students as $student) {
        $tableHtml .= '<tr>
                <td>' . $student['name'] . '</td>
                <td>' . $student['surname'] . '</td>
                <td>' . $student['age'] . '</td>
                <td>' . $student['email'] . '</td>
                <td>' . $student['phone'] . '</td>
            </tr>';
    }

    $tableHtml .= '</tbody></table>';

    return $tableHtml;
}

$studentsJson = file_get_contents('polaznici.json');
$students = json_decode($studentsJson, true);

echo getHtmlTable($students);
echo '<br>';

$students[] = [
    'name' => 'Iva',
    'surname' => 'Ivic',
    'age' => 25,
    'email' => 'iva.ivic@algebra.hr',
    'phone' => '091 123 4567'
];

$studentsJson = json_encode($students);

file_put_contents('polaznici.json', $studentsJson);

$studentsJson = file_get_contents('polaznici.json');
$students = json_decode($studentsJson, true);

echo getHtmlTable($students);