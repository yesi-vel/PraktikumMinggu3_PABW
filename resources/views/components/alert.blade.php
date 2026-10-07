@props(['type' => 'info', 'message'])

<div style="padding: 12px; margin-bottom: 15px; border-radius: 5px; 
    background-color: {{ $type === 'success' ? '#d4edda' : ($type === 'error' ? '#f8d7da' : '#cce5ff') }};
    color: {{ $type === 'success' ? '#155724' : ($type === 'error' ? '#721c24' : '#004085') }};
    border: 1px solid {{ $type === 'success' ? '#c3e6cb' : ($type === 'error' ? '#f5c6cb' : '#b8daff') }};">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>