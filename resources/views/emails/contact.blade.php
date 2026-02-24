<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; color: #333;">
  <div style="background: linear-gradient(135deg, #4f46e5 0%, #06b6d4 100%); padding: 30px; text-align: center; color: white; border-radius: 8px 8px 0 0;">
    <h1 style="margin: 0; font-size: 24px;">Nouveau message de contact</h1>
  </div>

  <div style="background: #f1f5f9; padding: 30px; border-radius: 0 0 8px 8px;">
    <p style="margin-top: 0;"><strong>De :</strong> {{ $contactMessage->nom }}</p>
    <p><strong>Email :</strong> <a href="mailto:{{ $contactMessage->email }}" style="color: #4f46e5; text-decoration: none;">{{ $contactMessage->email }}</a></p>
    <p><strong>Sujet :</strong> {{ $contactMessage->sujet }}</p>

    <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 20px 0;">

    <div style="background: white; padding: 20px; border-radius: 6px; border-left: 4px solid #4f46e5;">
      <h3 style="margin-top: 0; color: #1e293b;">Message :</h3>
      <p style="white-space: pre-wrap; line-height: 1.6;">{{ $contactMessage->message }}</p>
    </div>

    <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 20px 0;">

    <p style="font-size: 12px; color: #64748b; margin-bottom: 0;">
      Message reçu le {{ $contactMessage->created_at->format('d/m/Y à H:i') }}
    </p>
  </div>
</div>
