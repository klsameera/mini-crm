@extends('emails.Layouts.app')
@section('content')
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td class="pb-10" style="padding-bottom: 10px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff"
                        style="border-radius: 15px;">
                        <tbody>
                            <tr>
                                <td class="px-40 pt-40 pb-50 mpx-20 mpy-30"
                                    style="padding-left: 40px; padding-right: 40px; padding-top: 40px; padding-bottom: 50px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td class="text-16 a-left pb-25"
                                                    style="color:#d59595; font-family:Arial, sans-serif; font-size:16px; line-height:30px; min-width:auto !important; text-align:center; padding-bottom: 15px;">
                                                    <h1 style="font-weight: 800">
                                                        <b>
                                                            Welcome, {{ $company->name }}
                                                        </b>
                                                    </h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-16 a-left pb-25"
                                                    style="color:#48ac98; font-family:Arial, sans-serif; font-size:18px; line-height:30px; min-width:auto !important; text-align:center; padding-bottom: 25px; font-weight:600;">
                                                    <p>
                                                        We&apos;re so excited to have you on board!!
                                                    </p>
                                                    <p>
                                                        Your account has been created successfully.
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
