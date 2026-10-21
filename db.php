<?php

$dbHost = 'aws-0-ap-northeast-1.pooler.supabase.com';
$dbUser = 'postgres.fdpiddtxihemhdwllyjm';

$local = file_exists(__DIR__ . '/config.local.php') ? require __DIR__ . '/config.local.php' : [];

$dbPassword = getenv('SUPABASE_DB_PASSWORD') ?: ($local['SUPABASE_DB_PASSWORD'] ?? '');

$conn = pg_connect("host=$dbHost port=5432 dbname=postgres user=$dbUser password=$dbPassword sslmode=require");

if (!$conn) {
    exit('Database connection failed.');
}
