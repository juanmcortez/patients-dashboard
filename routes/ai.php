<?php

use App\Mcp\Servers\PatientsServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::local('patients', PatientsServer::class);
Mcp::web('/mcp/patients', PatientsServer::class);
