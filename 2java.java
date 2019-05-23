/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package itatiba.correo;

import java.util.logging.Level;
import java.util.logging.Logger;
import javax.mail.*;
import javax.mail.internet.*;
import java.util.*;

/**
 *
 * @author cesarFuentes
 */
public class SimuladorSMTP {

    private class SMTPAuthenticator extends Authenticator {

        private PasswordAuthentication authentication;

        public SMTPAuthenticator(String login, String password) {
            authentication = new PasswordAuthentication(login, password);
        }

        @Override
        protected PasswordAuthentication getPasswordAuthentication() {
            return authentication;
        }
    }

    public void sendMail(String destinatario, String Asunto, String mensaje) {
        try {
            String from = "cesarfuentes0594@hotmail.com";
            String to = destinatario;
            String subject = Asunto;
            String message = mensaje;
            String login = "laraveldocumental@gmail.com";
            String password = "cuenta12345";

            Properties props = new Properties();
            props.setProperty("mail.host", "smtp.gmail.com");
            props.setProperty("mail.smtp.port", "587");
            props.setProperty("mail.smtp.user", login);
            props.setProperty("mail.smtp.password", password);
            props.setProperty("mail.smtp.auth", "true");
            props.setProperty("mail.smtp.starttls.enable", "true");
            props.setProperty("mail.smtps.ssl.enable", "true");

            props.put("mail.debug", "true");
            props.put("mail.smtp.ssl.trust", "smtp.gmail.com");

//            Authenticator auth = new SMTPAuthenticator(login, password);

      //      Session session = Session.getInstance(props, auth);
      
       Session session = Session.getDefaultInstance(props, new javax.mail.Authenticator() 
            {
                protected PasswordAuthentication getPasswordAuthentication() 
                {
                    return new PasswordAuthentication(login,password);
                }
           });

            Transport transport = session.getTransport("smtp");
            transport.connect(null, login, password);
            
            MimeMessage msg = new MimeMessage(session);

            try {
                msg.setText(message);
                msg.setSubject(subject);
                msg.setFrom(new InternetAddress(from));
                msg.addRecipient(Message.RecipientType.TO,
                        new InternetAddress(to));
                Transport.send(msg);
            } catch (MessagingException ex) {
                Logger.getLogger(SimuladorSMTP.class.getName()).
                        log(Level.SEVERE, null, ex);
            }
        } catch (Exception ex) {
            Logger.getLogger(SimuladorSMTP.class.getName()).
                    log(Level.SEVERE, null, ex);
        }
    }
}
