<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StepCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::guard('customer')->user();

        // Redirect to basic info
        if ($user && (empty($user->gender) || empty($user->candidate_name) || empty($user->date_of_birth) || empty($user->number))) {
            return redirect()->route('member.basic.info')->with('error', 'Please complete your profile.');
        }

        // Redirect to education
        if ($user && (empty($user->highest_qualification) || empty($user->profession) || empty($user->working_sector))) {
            return redirect()->route('member.education.career')->with('error', 'Please complete your profile.');
        }
        // Redirect to family.location
        if ($user && (empty($user->father_status) || empty($user->mother_status) || empty($user->home_division))) {
            return redirect()->route('member.family.location')->with('error', 'Please complete your profile.');
        }
        // Redirect to physical.attribute
        if ($user && (empty($user->height) || empty($user->weight) || empty($user->body_type) || empty($user->complexion))) {
            return redirect()->route('member.physical.attribute')->with('error', 'Please complete your profile.');
        }
        // Redirect to lifestyle
        if ($user && (empty($user->religious_value) || empty($user->smoke))) {
            return redirect()->route('member.lifestyle')->with('error', 'Please complete your profile.');
        }
        // Redirect to partner.preferences
        if ($user && (empty($user->partner_gender) || empty($user->age_from) || empty($user->age_to))) {
            return redirect()->route('member.partner.preferences')->with('error', 'Please complete your profile.');
        }
        // Redirect to aboutme
        if ($user && (empty($user->write_about_yourself))) {
            return redirect()->route('member.aboutme')->with('error', 'Please complete your profile.');
        }

        return $next($request);
    }
}
