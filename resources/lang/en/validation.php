<?php

return [
    'accepted' => 'Le :attribute doit être accepté.',
    'active_url' => 'Le :attribute n\'est pas une URL valide.',
    'after' => 'Le :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num' => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'Le :attribute doit être un tableau.',
    'before' => 'Le :attribute doit être une date antérieure à :date.',
    'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'file' => 'Le :attribute doit être entre :min et :max kilo-octets.',
        'string' => 'Le :attribute doit être entre :min et :max caractères.',
        'array' => 'Le :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation du :attribute ne correspond pas.',
    'date' => 'Le :attribute n\'est pas une date valide.',
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'different' => 'Le :attribute et :other doivent être différents.',
    'digits' => 'Le :attribute doit avoir :digits chiffres.',
    'digits_between' => 'Le :attribute doit avoir entre :min et :max chiffres.',
    'dimensions' => 'Le :attribute a des dimensions d\'image non valides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'Le :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'une des valeurs suivantes : :values.',
    'exists' => 'Le :attribute sélectionné est invalide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'file' => 'Le :attribute doit être supérieur à :value kilo-octets.',
        'string' => 'Le :attribute doit être supérieur à :value caractères.',
        'array' => 'Le :attribute doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'file' => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
        'string' => 'Le :attribute doit être supérieur ou égal à :value caractères.',
        'array' => 'Le :attribute doit avoir :value éléments ou plus.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le :attribute sélectionné est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'string' => 'Le :attribute doit être inférieur à :value caractères.',
        'array' => 'Le :attribute doit avoir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
        'file' => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
        'string' => 'Le :attribute doit être inférieur ou égal à :value caractères.',
        'array' => 'Le :attribute ne doit pas avoir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => 'Le :attribute ne peut être supérieur à :max.',
        'file' => 'Le :attribute ne peut être supérieur à :max kilo-octets.',
        'string' => 'Le :attribute ne peut être supérieur à :max caractères.',
        'array' => 'Le :attribute ne peut avoir plus de :max éléments.',
    ],
    'mimes' => 'Le :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file' => 'Le :attribute doit être au moins de :min kilo-octets.',
        'string' => 'Le :attribute doit être au moins de :min caractères.',
        'array' => 'Le :attribute doit avoir au moins :min éléments.',
    ],
    'not_in' => 'Le :attribute sélectionné est invalide.',
    'not_regex' => 'Le format du :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format du :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other est :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
   
    'required_with' => 'Le champ :
    est obligatoire lorsque
    est présent.',
    'required_with_all' => 'Le champ
    est obligatoire lorsque
    sont présents.',
    'required_without' => 'Le champ
    est obligatoire lorsque
    n"est pas présent.',
    'required_without_all' => 'Le champ
    est obligatoire lorsqu"aucun de
    n"est présent.',
    'same' => 'Le
    et
    doivent correspondre.',
    'size' => [
    'numeric' => 'Le
    doit être
    .',
    'file' => 'Le
    doit être de
    kilo-octets.',
    'string' => 'Le :attribute  doit être de caractères.',
    'array' => 'Le
    doit contenir
    éléments.',
    ],
    'starts_with' => 'Le
    doit commencer par l"un des éléments suivants :
    .',
    'string' => 'Le
    doit être une chaîne de caractères.',
    'timezone' => 'Le
    doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute n"a pas pu être téléchargé.',
    'url' => 'Le format du est invalide.',
    'uuid' => 'Le  doit être un UUID valide.',
 
];