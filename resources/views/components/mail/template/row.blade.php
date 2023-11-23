<tr style="border-collapse:collapse">
    <td align="{{$align ?? 'left'}}" valign="{{$valign ?? 'top'}}" style="padding:{{$p ?? 0}};Margin:{{$m ?? 0}};padding-bottom:{{$pb ?? 10}}px;padding-top:{{$pt ?? 10}}px;padding-right:{{$pr ?? 0}}px;padding-left:{{$pl ?? 0}}px;">
        <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:{{$fontweight ?? 400}}; line-height:{{($fontsize ?? 16) * 1.5}}px;color:{{$color ?? '#2f2f2f'}};font-size:{{$fontsize ?? 16}}px">
            {{$slot}}
        </p>
    </td>
</tr>
