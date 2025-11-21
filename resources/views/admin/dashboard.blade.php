@extends('layouts.admin')

@section('content')

<style>
    /* Dashboard Grid */
    .dash-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-top: 20px;
        padding: 10px;
    }

    /* Dashboard Card */
    .dash-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 20px;
        box-shadow: 0 5px 14px rgba(0, 0, 0, 0.06);
        transition: 0.3s ease-in-out;
    }

    .dash-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.09);
    }

    /* Header Inside Each Card */
    .dash-header {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    /* Icon Wrapper */
    .dash-icon-wrapper {
        width: 55px;
        height: 55px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dash-icon i {
        font-size: 26px;
        color: #111;
    }

    /* Title + Subtitle */
    .dash-title .dash-number {
        font-size: 22px;
        font-weight: 600;
        margin: 0;
        color: #111827;
    }

    .dash-title p {
        margin: 0;
        font-size: 14px;
        color: #6b7280;
    }

    /* Body */
    .dash-body {
        margin-top: 18px;
        font-size: 15px;
        color: #374151;
        line-height: 1.6;
    }

    /* Button */
    .dash-body button {
        background: #4f46e5;
        color: #fff;
        border: none;
        padding: 10px 18px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: 0.25s;
    }

    .dash-body button:hover {
        background: #4338ca;
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 480px) {
        .dash-grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }
    }
</style>

<div class="content-area">

    <div class="dash-grid">

        <!-- Admin Profile Card -->
        <div class="dash-card">
            <div class="dash-header">
                <div class="dash-icon-wrapper" style="background-color:#e0e7ff;">
                    <span class="dash-icon"><i class="fas fa-user-shield"></i></span>
                </div>
                <div class="dash-title">
                    <h3 class="dash-number">Admin Profile</h3>
                    <p style="color:#555;">Super Admin Details</p>
                </div>
            </div>
            <div class="dash-body" style="margin-top:15px;">
                <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Role:</strong> Super Admin</p>
            </div>
        </div>

        <!-- Contact Leads Card -->
        <div class="dash-card">
            <div class="dash-header">
                <div class="dash-icon-wrapper" style="background-color:#d1fae5;">
                    <span class="dash-icon"><i class="fas fa-envelope-open-text"></i></span>
                </div>
                <div class="dash-title">
                    <h3 class="dash-number">Contact Leads</h3>
                    <p style="color:#555;">Total Leads Received</p>
                </div>
            </div>

            <div class="dash-body" style="margin-top:15px;">
                <p style="font-size:28px; font-weight:600; color:#10b981;">
                    {{ $contactCount }} Leads
                </p>

                <a href="{{route('admin.leads')}}"  style="
                    margin-top:10px;
                    background:#10b981;
                    padding:10px 18px;
                    color:#fff;
                    border-radius:6px;
                    border:none;
                    cursor:pointer;
                ">
                    View All Leads
                </a>
                
            </div>
        </div>

    </div>
</div>



@endsection

@section('scripts')
@endsection